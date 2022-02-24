<?php

namespace App\Http\Controllers;
use App\Models\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $mailInbox = Mail::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('mail.inbox.index', compact('mailInbox'));
    }

    public function indexDeleted()
    {
        $mailInboxDeleted = Mail::onlyTrashed()->simplePaginate(10);

        return view('mail.deleted.index', compact('mailInboxDeleted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        $mail->update(['read_at' => true]);
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
       
        return view('mail.inbox.show_inbox', compact('mail', 'img_attachments', 'file_attachments'));
    }

    public function downloadMailAttachment($attachment)
    {
        $file = storage_path('app/public/email/recived_attachments/').$attachment;

        if (file_exists($file))
        {
            return response()->download($file);
        }

        return back()->with('message_warning', 'Fajl nepostoji.');
    }

    public function showDeleted($mailDeleted)
    {
        $mail = Mail::onlyTrashed()->find($mailDeleted);

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
       
       
        return view('mail.deleted.show_inbox_deleted', compact('mail', 'img_attachments', 'file_attachments'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();
        return redirect(route('mail_index'))->with('message', 'Imejl uspešno izbrisan.');
    }

    public function restoreDeleted($mailDeleted)
    {
        Mail::onlyTrashed()->find($mailDeleted)->restore();

        return redirect(route('mail_index_deleted'))->with('message', 'Imejl uspešno vraćen.');
    }

    public function restoreCheckedDeleted(Request $request)
    {
        Mail::onlyTrashed()->whereIn('id', $request->input('deleteChecked'))->restore();

        return redirect(route('mail_index_deleted'))->with('message', 'Imejl uspešno vraćen.');
    }

    public function destroyPermanently($mailDeleted)
    {
        
        $deleteMailPermanently = Mail::onlyTrashed()->find($mailDeleted);
        
        $deleteAttachments = $deleteMailPermanently->attachment;

        if(!empty($deleteAttachments))
        {
            $files = explode(',', $deleteAttachments);

            foreach($files as $file)
            {
                $path = storage_path('app/public/email/recived_attachments/').$file;
                File::delete($path);
            }
        }

        $deleteMailPermanently->forceDelete();

        return redirect(route('mail_index_deleted'))->with('message', 'Imejl uspešno obrisan.');
    }

    public function destroyCheckedPermanently(Request $request)
    {
        $deleteMailsPermanently = Mail::onlyTrashed()->whereIn('id', $request->input('deleteChecked'))->get();
        
        foreach ($deleteMailsPermanently as $mails) 
        {
            $deleteAttachments = $mails->attachment;
            if(!empty($deleteAttachments))
            {
                $files = explode(',', $deleteAttachments);
                foreach($files as $file)
                {
                    $path = storage_path('app/public/email/recived_attachments/').$file;
                    File::delete($path);
                }
            }
            $mails->forceDelete();
        }
        
        return redirect(route('mail_index_deleted'))->with('message', 'Imejl uspesno obrisan.');

    }

    public function destroyChecked(Request $request)
    {
        Mail::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('mail_index'))->with('message', 'Imejl uspešno izbrisan.');
    }
}
