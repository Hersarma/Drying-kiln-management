<?php

namespace App\Http\Controllers;

use App\Models\MailConfig;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {

        return view('settings.index');
    }

    public function mail_config_show()
    {
        return view('settings.mail.mail_config_show');
    }

    public function store_mail_incoming_config()
    {
        $validate = request()->validateWithBag('create_mail_incoming_config', [
            'host' => 'required',
            'port' => 'required',
            'encryption' => 'required',
            'username' => 'required',
            'password' => 'required',
            'protocol' => 'required'
        ]);

        MailConfig::create($validate);

        return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspesno snimljena');
    }
}
