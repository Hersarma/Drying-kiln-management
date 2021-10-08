<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_clients(Request $request)
    {

        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $clients = Client::
        where('name', 'like', '%' . $query . '%')->orderBy('name', 'asc')->paginate(10);
        return view('clients.search', compact('clients'))->render();

    }

    public function search_timber_incoming_clients(Request $request)
    {

        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $clients = Client::
        where('name', 'like', '%' . $query . '%')->orderBy('name', 'asc')->paginate(10, ['id', 'name']);
        return view('timberincoming.modals.search_client', compact('clients'))->render();

    }

}
