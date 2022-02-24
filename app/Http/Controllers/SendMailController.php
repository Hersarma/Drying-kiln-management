<?php

namespace App\Http\Controllers;
use App\Mail\SendNewMail;
use App\Models\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SendMailController extends Controller
{

    public function index()
    {   
        
        $sentMail = SendMail::orderBy('created_at', 'desc')->simplePaginate(2);
        return view('mail.sent.index', compact('sentMail'));

    }

    public function show(SendMail $mail)
    {
        $img_attachments = [];
        $file_attachments = [];

        $imgExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];

        if (!empty($mail->attachment)) {
            $attachments = explode(',', $mail->attachment);
            foreach($attachments as $attachment){
                $extension = pathinfo($attachment, PATHINFO_EXTENSION);
                if(in_array($extension, $imgExtensions))
                    {
                    array_push($img_attachments, $attachment);
                }else{
                    array_push($file_attachments, $attachment);
                }
            }
        }
       
        return view('mail.sent.show_sent_mail', compact('mail', 'img_attachments', 'file_attachments'));
    }

     public function downloadSentMailAttachment($attachment)
    {
        $file = storage_path('app/public/email/sent_attachments/').$attachment;

        if (file_exists($file))
        {
            return response()->download($file);
        }

        return back()->with('message_warning', 'Fajl nepostoji.');
    }

    public function newMail()
    {
        
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

    public function destroy(SendMail $mail)
    {

        
        $deleteAttachments = $mail->attachment;

        if(!empty($deleteAttachments))
        {
            $files = explode(',', $deleteAttachments);

            foreach($files as $file)
            {
                $path = storage_path('app/public/email/sent_attachments/').$file;
                File::delete($path);
            }
        }

        $mail->delete();

        return redirect(route('mail_sent_index'))->with('message', 'Mail uspešno obrisan.');
    }

    public function destroyChecked(Request $request){
        $mails = SendMail::whereIn('id', $request->input('deleteChecked'))->get();
        
        foreach ($mails as $mail) 
        {
            $deleteAttachments = $mail->attachment;
            if(!empty($deleteAttachments))
            {
                $files = explode(',', $deleteAttachments);
                foreach($files as $file)
                {
                    $path = storage_path('app/public/email/sent_attachments/').$file;
                    File::delete($path);
                }
            }
            $mail->delete();
        }
        
        return redirect(route('mail_sent_index'))->with('message', 'Mail uspešno obrisan.');
    }
}
