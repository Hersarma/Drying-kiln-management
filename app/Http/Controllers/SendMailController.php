<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        return view('mail.new_mail.send_mail');
    }
}
