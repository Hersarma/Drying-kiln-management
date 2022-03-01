<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\Mail;
use App\Models\SendMail;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_clients(Request $request)
    {
        $query = $request->get('query');
        $url = $request->get('url_name');
        $query = str_replace(" ", "%", $query);
        $clients = Client::
        where('name', 'like', '%' . $query . '%')->orderBy('name', 'asc')->simplePaginate(10,['id', 'name', 'email', 'notes']);
        
        return view($url.'.search_client', compact('clients'))->render();
       
    }

    public function search_incomings(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $incoming = Incoming::with('clients')->whereHas('clients',function($q) use($query){
        $q->where('name', 'like', "%{$query}%");
        })->orderBy('created_at', 'desc')->simplePaginate(10);
        
        return view('incoming.search', compact('incoming'))->render();
    }

    public function search_outgoings(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $outgoing = Outgoing::with('clients')->whereHas('clients',function($q) use($query){
        $q->where('name', 'like', "%{$query}%");
        })->orderBy('created_at', 'desc')->simplePaginate(10);
       
        return view('outgoing.search', compact('outgoing'))->render();
    }

    public function search_mail_inbox(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $mailInbox = Mail::where('name', 'like', '%' . $query . '%')
        ->orWhere('from', 'like', '%' . $query . '%')->orderBy('created_at', 'desc')->simplePaginate(10);
       
        return view('mail.inbox.search_mail_inbox', compact('mailInbox'))->render();
    }

    public function search_mail_deleted(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $mailInboxDeleted = Mail::onlyTrashed()->where('name', 'like', '%' . $query . '%')
        ->orWhere('from', 'like', '%' . $query . '%')->orderBy('created_at', 'desc')->simplePaginate(10);
       
        return view('mail.deleted.search_mail_inbox_deleted', compact('mailInboxDeleted'))->render();
    }

    public function search_mail_sent(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $sentMail = SendMail::where('recipient', 'like', '%' . $query . '%')
        ->orderBy('created_at', 'desc')->simplePaginate(10);
       
        return view('mail.sent.search_mail_sent', compact('sentMail'))->render();
    }

    public function search_users(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $users = User::where('name', 'like', '%' . $query . '%')
        ->orWhere('last_name', 'like', '%' . $query . '%')
        ->orWhere('email', 'like', '%' . $query . '%')
        ->orderBy('created_at', 'desc')
        ->simplePaginate(2);

        return view('settings.users.search_user', compact('users'))->render();
    }

}
