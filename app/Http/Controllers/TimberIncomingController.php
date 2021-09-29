<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\TimberIncoming;
use Illuminate\Http\Request;

class TimberIncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::where('id', 1)->first();
        //dd($client);
        return view('timberincoming.index', compact('client'));
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
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function show(TimberIncoming $timberIncoming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function edit(TimberIncoming $timberIncoming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimberIncoming $timberIncoming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimberIncoming $timberIncoming)
    {
        //
    }
}
