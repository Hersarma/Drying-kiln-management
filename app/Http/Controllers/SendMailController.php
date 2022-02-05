<?php

namespace App\Http\Controllers;
use App\Mail\SendNewMail;
use App\Models\MailConfigOutgoing;
use App\Models\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SendMailController extends Controller
{

    public function index()
    {   
        $mailConfigOutgoing = MailConfigOutgoing::first();
        
        if (empty($mailConfigOutgoing)) {
            return redirect(route('mail_config_show'))->with('message_warning', 'Konfiguracija odlaznih imejlova nije podešena.');
        }

        $sentMail = SendMail::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('mail.sent.index', compact('sentMail'));

    }

    public function newMail()
    {
        $mailConfigOutgoing = MailConfigOutgoing::first();
        
        if (empty($mailConfigOutgoing)) {
            return redirect(route('mail_config_show'))->with('message_warning', 'Konfiguracija odlaznih imejlova nije podešena.');
        }
        return view('mail.new_mail.send_mail');
    }

    public function sendMail(Request $request)
    {

        $this->validate($request, [
            'recipient' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'message' => $request->message,
            'subject' => $request->subject,
            'files' => $request->file('file')

        );
        try{
            Mail::to($request['recipient'])->send(new SendNewMail($data));
        }catch(\Exception $e){

            return redirect(route('new_mail'))->with('message_send_mail_warning', $e->getMessage());
        }
        

        if(count(Mail::failures()) == 0) {

            $data = [];
            $files = $request->file('file');
            $sentMail = new SendMail;
            $sentMail->recipient = $request->recipient;
            $sentMail->subject = $request->subject;
            $sentMail->message = $request->message;
            if(!empty($files))
            {
                foreach($files as $file)
                {
                    $fileName = uniqid().'_'.$file->getClientOriginalName();
                    $fp = fopen(storage_path('app/public/email/sent_attachments/').$fileName,"w");
                    file_put_contents(storage_path('app/public/email/sent_attachments/'. $fileName), file_get_contents($file));
                    fclose($fp);
                    array_push($data, $fileName);
                }
                $dataAttachments = implode(',', $data);
                $sentMail->attachment = $dataAttachments;
            }

            $sentMail->save();

            return redirect(route('new_mail'))->with('message', 'Poruka uspešno poslata.');
        }
        
        

    }
}
