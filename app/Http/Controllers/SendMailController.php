<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        return view('mail.new_mail.send_mail');
    }

    public function send_mail(Request $request)
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

        Mail::to($request['recipient'])->send(new SendMail($data));

        if(count(Mail::failures()) == 0) {

            $data = [];
            $files = $request->file('file');
            $sentMail = new SentMail;
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
                $data_attachments = implode(',', $data);
                $sentMail->attachment = $data_attachments;
            }

            $sentMail->save();

            return redirect(route('mail.new_mail.send_mail'))->with('message', 'Poruka uspesno poslata.');
        }else{
            return redirect(route('mail.new_mail.send_mail'))->with('message', 'Poruka nije poslata.');
        }

    }
}
