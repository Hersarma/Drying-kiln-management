<?php

namespace App\Http\Controllers;
use Webklex\IMAP\Facades\Client;
use App\Models\User;
use App\Models\MailConfigIncoming;
use App\Models\MailConfigOutgoing;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function mail_config_show()
    {
        $mailConfigOutgoing = MailConfigOutgoing::first();
        $mailConfigIncoming = MailConfigIncoming::first();

        return view('settings.mail.mail_config_show', compact('mailConfigIncoming', 'mailConfigOutgoing'));
    }

    /*Incoming mail*/
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
        ->with('test_mail_connection_incoming_create', 'Konekcija nije uspela, proverite parametre.');
        }

        if ($client->isConnected()) {

            MailConfigIncoming::create($validate);
            return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspešno snimljena');
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
        ->with('test_mail_connection_incoming_update', 'Konekcija nije uspela, proverite parametre.');
        }

        if ($client->isConnected()) {
            
            $mailConfigIncoming->update($validate);

            return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspešno snimljena');
        }
    }
    /*Outgoing mail*/
    public function store_mail_outgoing_config(Request $request)
    {
        
        $validate = request()->validateWithBag('create_mail_outgoing_config', [
            'protocol' => 'required',
            'host' => 'required',
            'port' => 'required',
            'encryption' => 'required',
            'username' => 'required',
            'password' => 'required',
            'sender_name' =>'required',
            'sender_email' => 'required'
        ]);

        $config = array(
            'driver'     =>     $request->protocol,
            'host'       =>     $request->host,
            'port'       =>     $request->port,
            'username'   =>     $request->username,
            'password'   =>     $request->password,
            'encryption' =>     $request->encryption,
            'from'       =>     array('address' => $request->sender_email, 'name' => $request->sender_name),
                    );
        Config::set('mail', $config);

        try{
            Mail::to($request->username)->send(new TestMail());
        }catch(\Exception $e){
            
            return redirect(route('mail_config_show'))->with('test_mail_connection_outgoing_create', $e->getMessage());
        }

        MailConfigOutgoing::create($validate);
        return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspešno snimljena.');
    }

    public function update_mail_outgoing_config(Request $request, MailConfigOutgoing $mailConfigOutgoing)
    {
        $validate = request()->validateWithBag('edit_mail_outgoing_config', [
            'protocol' => 'required',
            'host' => 'required',
            'port' => 'required',
            'encryption' => 'required',
            'username' => 'required',
            'password' => 'required',
            'sender_name' =>'required',
            'sender_email' => 'required'
        ]);

        $config = array(
            'driver'     =>     $request->protocol,
            'host'       =>     $request->host,
            'port'       =>     $request->port,
            'username'   =>     $request->username,
            'password'   =>     $request->password,
            'encryption' =>     $request->encryption,
            'from'       =>     array('address' => $request->sender_email, 'name' => $request->sender_name),
                    );
        Config::set('mail', $config);

        try{
            Mail::to($request->username)->send(new TestMail());
        }catch(\Exception $e){
            return redirect(route('mail_config_show'))->with('test_mail_connection_outgoing_update', $e->getMessage());
        }

        $mailConfigOutgoing->update($validate);
        return redirect(route('mail_config_show'))->with('message', 'Konfiguracija uspešno snimljena.');

    }

    public function userIndex(){

        $users = User::orderBy('name', 'asc')->simplePaginate(10);

        return view('settings.users.index', compact('users'));

    }

    public function userShow(User $user){

        return view('settings.users.show', compact('user'));
    }

    public function userStore(Request $request){
        
        $validate = request()->validateWithBag('create_user', [
            'name' => 'required',
            'last_name' => 'nullable',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('users_index'))->with('message', 'Novi korisnik uspešno kreiran.');
    }

    public function userDestroy(User $user){

        $user->delete();

        return redirect(route('users_index'))->with('message', 'Korisnik uspešno obrisan.');
    }

    public function destroyChecked(Request $request){

        User::whereIn('id', $request->input('deleteChecked'))->delete();
        return redirect(route('users_index'))->with('message', 'Korisnik uspešno obrisan.');
    }
}
