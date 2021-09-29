<?php

namespace App\Http\Controllers;

use App\Models\TimberOutgoing;
use Illuminate\Http\Request;

class TimberOutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timberoutgoing.index');
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
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function show(TimberOutgoing $timberOutgoing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function edit(TimberOutgoing $timberOutgoing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimberOutgoing $timberOutgoing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimberOutgoing $timberOutgoing)
    {
        //
    }
}
