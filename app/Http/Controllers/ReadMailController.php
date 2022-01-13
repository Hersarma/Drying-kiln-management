<?php

namespace App\Http\Controllers;

use App\Models\ReadMail;
use Illuminate\Http\Request;

class ReadMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail_inbox = ReadMail::orderBy('created_at', 'desc')->simplePaginate(10,['from', 'subject']);
        return view('mail.index', compact('mail_inbox'));
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
     * @param  \App\Models\ReadMail  $readMail
     * @return \Illuminate\Http\Response
     */
    public function show(ReadMail $readMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReadMail  $readMail
     * @return \Illuminate\Http\Response
     */
    public function edit(ReadMail $readMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReadMail  $readMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReadMail $readMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReadMail  $readMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReadMail $readMail)
    {
        //
    }
}