<?php

namespace App\Http\Controllers;

use Webklex\IMAP\Facades\Client;
use App\Models\MailConfigIncoming;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function mail_config_show()
    {
        $mailConfigIncoming = MailConfigIncoming::first();

        return view('settings.mail.mail_config_show', compact('mailConfigIncoming'));
    }

    public function store_mail_incoming_config(Request $request)
    {
        $validate = request()->validateWithBag('create_mail_incoming_config', [
            'host' => 'required',
            'port' => 'required',
            'encryption' => 'required',
            'username' => 'required',
            'password' => 'required',
            'protocol' => 'required'
        ]);

        $client = Client::make($validate);

        try{
        $client->connect();
        }catch (\Webklex\PHPIMAP\Exceptions\ConnectionFailedException $e){

        return redirect(route('mail_config_show'))
        ->with('test_mail_connection_create', 'Konekcija nije uspela, proverite parametre.');
        }

        if ($client->isConnected()) {

            MailConfigIncoming::create($validate);
            return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspesno snimljena');
         }

    }

    public function update_mail_incoming_config(Request $request, MailConfigIncoming $mailConfigIncoming)
    {
        $validate = request()->validateWithBag('edit_mail_incoming_config', [
            'host' => 'required',
            'port' => 'required',
            'encryption' => 'required',
            'username' => 'required',
            'password' => 'required',
            'protocol' => 'required'
        ]);

        $client = Client::make($validate);

        try{
            $client->connect();
        }catch (\Webklex\PHPIMAP\Exceptions\ConnectionFailedException $e){

        return redirect(route('mail_config_show'))
        ->with('test_mail_connection_update', 'Konekcija nije uspela, proverite parametre.');
        }

        if ($client->isConnected()) {
            
            $mailConfigIncoming->update($validate);

            return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspesno snimljena');
        }
    }
}
