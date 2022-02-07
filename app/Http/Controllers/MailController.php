<?php

namespace App\Http\Controllers;
use App\Models\MailConfigIncoming;
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
        $mailConfigIncoming = MailConfigIncoming::first();
        if (empty($mailConfigIncoming)) {
            return redirect(route('mail_config_show'))->with('message_warning', 'Konfiguracija dolaznih imejlova nije podešena.');
        }
        $mailInbox = Mail::orderBy('created_at', 'desc')->simplePaginate(10,['id', 'name', 'from', 'subject', 'created_at']);
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
        return view('mail.inbox.show_inbox', compact('mail'));
    }

    public function showDeleted(Mail $mailDeleted)
    {

        return view('mail.deleted.show_inbox_deleted', compact('mailDeleted'));
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
        return redirect(route('mail_index'))->with('message', 'Mejl uspešno izbrisan.');
    }

    public function restoreDeleted($mailDeleted)
    {
        Mail::onlyTrashed()->find($mailDeleted)->restore();

        return redirect(route('mail_index_deleted'))->with('message', 'Mail uspešno vraćen.');
    }

    public function restoreCheckedDeleted(Request $request)
    {
        Mail::onlyTrashed()->whereIn('id', $request->input('deleteChecked'))->restore();

        return redirect(route('mail_index_deleted'))->with('message', 'Mail uspešno vraćen.');
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

        return redirect(route('mail_index_deleted'))->with('message', 'Mail uspešno obrisan.');
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
        
        return redirect(route('mail_index_deleted'))->with('message', 'Mail uspesno obrisan.');

    }

    public function destroyChecked(Request $request)
    {
        Mail::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('mail_index'))->with('message', 'Imejl uspešno izbrisan.');
    }
}
