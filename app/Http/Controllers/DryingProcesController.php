<?php

namespace App\Http\Controllers;

use App\Models\DryingProces;
use App\Models\DryKiln;
use Illuminate\Http\Request;

class DryingProcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DryKiln $drykiln)
    {
        $dryingProces = $drykiln->dryKilnProces()->where('active', false)->orderBy('created_at' ,'desc')->simplePaginate(10);
        
        if($dryingProces->isNotEmpty()){
            return view('drykiln.drying_proces', compact('dryingProces', 'drykiln'));
        }
       
        return redirect(route('drykiln.show', $drykiln))->with('message_warning', 'Ne postoji istorija sušenja');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DryingProces  $dryingProces
     * @return \Illuminate\Http\Response
     */
    public function show(DryingProces $dryingProces)
    {
        $dryKilnReadings = $dryingProces->drykilnreadings()->orderBy('created_at', 'desc')->simplePaginate(10);

        return view('drykiln.drying_proces_show', compact('dryingProces', 'dryKilnReadings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DryingProces  $dryingProces
     * @return \Illuminate\Http\Response
     */
    public function edit(DryingProces $dryingProces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DryingProces  $dryingProces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DryingProces $dryingProces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DryingProces  $dryingProces
     * @return \Illuminate\Http\Response
     */
    public function destroy(DryingProces $dryingProces)
    {
        
        $dryingProces->delete();

       
        return redirect(route('drying_proces', $dryingProces->dry_kiln_id))->with('message', 'Proces uspešno izbrisan.');
    }

    public function destroyChecked(Request $request)
    {
        DryingProces::whereIn('id', $request->input('deleteChecked'))->delete();
        return back()->with('message', 'Svi procesi uspešno izbrisani.');
    }
}
