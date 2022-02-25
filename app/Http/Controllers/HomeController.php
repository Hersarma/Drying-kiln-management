<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\DryingProces;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $clients = Client::count();
        $incomings = Incoming::count();
        $outgoings = Outgoing::count();
        $drykiln = DryingProces::where('active', true)->count();
        $recentIncomings = Incoming::with('clients')->orderBy('created_at', 'desc')->take(5)->get();
        $recentOutgoings = Outgoing::with('clients')->orderBy('created_at', 'desc')->take(5)->get();
        return view('dashboard.index', compact('clients', 'incomings', 'outgoings', 'drykiln', 'recentIncomings', 'recentOutgoings'));
    }
}
