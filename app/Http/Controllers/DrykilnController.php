<?php

namespace App\Http\Controllers;

use App\Models\Drykiln;
use Illuminate\Http\Request;

class DrykilnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drykilns = Drykiln::all();
        return view('drykiln.index', compact('drykilns'));
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
     * @param  \App\Models\Drykiln  $drykiln
     * @return \Illuminate\Http\Response
     */
    public function show(Drykiln $drykiln)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drykiln  $drykiln
     * @return \Illuminate\Http\Response
     */
    public function edit(Drykiln $drykiln)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drykiln  $drykiln
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drykiln $drykiln)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drykiln  $drykiln
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drykiln $drykiln)
    {
        //
    }
}
