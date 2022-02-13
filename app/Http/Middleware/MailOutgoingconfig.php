<?php

namespace App\Http\Middleware;
use App\Models\MailConfigOutgoing;
use Closure;
use Illuminate\Http\Request;

class MailOutgoingconfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $mailConfigOutgoing = MailConfigOutgoing::first();
        if (empty($mailConfigOutgoing)) {
            return redirect(route('mail_config_show'))->with('message_warning', 'Konfiguracija odlaznih imejlova nije podešena.');
        }
        return $next($request);
    }
}
