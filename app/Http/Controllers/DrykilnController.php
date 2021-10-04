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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validate = request()->validateWithBag('create_drykiln', [
            'name' => 'required',
        ]);

        Drykiln::create($validate);

        return redirect(route('drykiln-index'))->with('message', 'Sušara uspesno kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drykiln  $drykiln
     * @return \Illuminate\Http\Response
     */
    public function show(Drykiln $drykiln)
    {
        return view('drykiln.show');
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
