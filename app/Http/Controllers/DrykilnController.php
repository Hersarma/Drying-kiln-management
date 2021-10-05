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

    public function store(){

        $validator = request()->validateWithBag('create_drykiln', [
            'name' => 'required|unique:dry_kilns'
        ]);

        DryKiln::create($validator);

        return redirect(route('drykiln-index'))->with('message', 'Susara uspesno snimljena');
    }
}
