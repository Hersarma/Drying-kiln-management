<?php

namespace App\Http\Controllers;
use App\Models\Client;
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
        
        //return view('incoming.search', compact('incoming'))->render();
    }

}
