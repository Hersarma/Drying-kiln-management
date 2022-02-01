<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Mail;
use App\Models\MailConfigIncoming;
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
        $mailConfigIncoming = MailConfigIncoming::first();
        if (!empty($mailConfigIncoming)) {

            $client = Client::make([
            'host'          => $mailConfigIncoming->host,
            'port'          => $mailConfigIncoming->port,
            'encryption'    => $mailConfigIncoming->encryption,
            'validate_cert' => $mailConfigIncoming->validate_cert,
            'username'      => $mailConfigIncoming->username,
            'password'      => $mailConfigIncoming->password,
            'protocol'      => $mailConfigIncoming->protocol
        ]);
        $client->connect();

        $folder = $client->getFolder('INBOX');

        $messages = $folder->query()->unseen()->get();

        foreach ($messages as $message) {
            $attachments = $message->getAttachments();
            $newMail = new Mail;
            $newMail->text = $message->getHTMLBody();
            $newMail->subject = $message->getSubject();
            $newMail->name = $message->getFrom()[0]->personal;
            $newMail->from = $message->getFrom()[0]->mail;
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

                $dataAttachments = implode(',', $data);
                $newMail->attachment = $dataAttachments;
            }

            $newMail->save();

        }
        }
        
    }
}
