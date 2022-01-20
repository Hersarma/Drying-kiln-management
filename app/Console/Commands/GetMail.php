<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Mail;
use App\Models\MailConfig;
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
        $mailconfig = MailConfig::first();
        if ($mailconfig) {

            $client = Client::make([
            'host'          => $mailconfig->host,
            'port'          => $mailconfig->port,
            'encryption'    => $mailconfig->encryption,
            'validate_cert' => $mailconfig->validate_cert,
            'username'      => $mailconfig->username,
            'password'      => $mailconfig->password,
            'protocol'      => $mailconfig->protocol
        ]);
        $client->connect();

        $folder = $client->getFolder('INBOX');

        $messages = $folder->query()->unseen()->get();

        foreach ($messages as $message) {
            $attachments = $message->getAttachments();
            $new_mail = new Mail;
            $new_mail->text = $message->getHTMLBody();
            $new_mail->subject = $message->getSubject();
            $new_mail->name = $message->getFrom()[0]->personal;
            $new_mail->from = $message->getFrom()[0]->mail;
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
                $new_mail->attachment = $data_attachments;
            }

            $new_mail->save();

        }
        }
        
    }
}
