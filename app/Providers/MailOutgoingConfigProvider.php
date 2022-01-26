<?php

namespace App\Providers;
use App\Models\MailConfigOutgoing;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MailOutgoingConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try{
            
        $mailConfigOutgoing = MailConfigOutgoing::first();

                if (!empty($mailConfigOutgoing)) {

                    $config = array(
                        'driver'     =>     $mailConfigOutgoing->protocol,
                        'host'       =>     $mailConfigOutgoing->host,
                        'port'       =>     $mailConfigOutgoing->port,
                        'username'   =>     $mailConfigOutgoing->username,
                        'password'   =>     $mailConfigOutgoing->password,
                        'encryption' =>     $mailConfigOutgoing->encryption,
                        'from'       =>     array('address' => $mailConfigOutgoing->sender_email, 'name' => $mailConfigOutgoing->sender_name),
                    );
                    Config::set('mail', $config);
                }
        }catch(\Exception $e){

        }
        
    }
}
