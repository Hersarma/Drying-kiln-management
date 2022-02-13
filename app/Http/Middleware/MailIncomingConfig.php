<?php

namespace App\Http\Middleware;
use App\Models\MailConfigIncoming;
use Closure;
use Illuminate\Http\Request;

class MailIncomingConfig
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
        $mailConfigIncoming = MailConfigIncoming::first();
        if (empty($mailConfigIncoming)) {
            return redirect(route('mail_config_show'))->with('message_warning', 'Konfiguracija dolaznih imejlova nije podešena.');
        }
        return $next($request);
    }
}
