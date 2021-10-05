<?php

namespace App\Http\Controllers;
use App\Models\DryKiln;
use Illuminate\Http\Request;

class DryKilnController extends Controller
{
    public function index(){

        $drykilns = DryKiln::with('dry_kiln_config')->get();
        
        return view('drykiln.index', compact('drykilns'));
        
    }
}
