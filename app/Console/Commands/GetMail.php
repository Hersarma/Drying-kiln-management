<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ReadMail;
use Webklex\IMAP\Facades\Client;
class GetMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $oClient = Client::account('default');
        $oClient->connect();

        $aFolder = $oClient->getFolder('INBOX');

        $messages = $aFolder->query()->unseen()->get();

        foreach ($messages as $message) {
            $attachments = $message->getAttachments();
            $mail = new ReadMail;
            $mail->text = $message->getHTMLBody();
            $mail->subject = $message->getSubject();
            $mail->from = $message->getFrom()[0]->mail;
            $data = [];

            if(!empty($attachments))
            {
                foreach ($attachments as $attachment)
                {
                    $path = uniqid().'_'.$attachment->name;
                    $fp = fopen(storage_path('app/public/email/recived_attachments/').$path,"w");
                    file_put_contents(storage_path('app/public/email/recived_attachments/'. $path), $attachment->content);
                    fclose($fp);
                    array_push($data, $path);
                }

                $data_attachments = implode(',', $data);
                $mail->attachment = $data_attachments;
            }

            $mail->save();

           /* $users = User::whereHas('roles', function ($query) {
                $query->whereIn('name', ['admin']);
            })
                ->get();
            Notification::send($users, new EmailNotification($message->getFrom()[0]->mail));
            */
        }
    }
}
