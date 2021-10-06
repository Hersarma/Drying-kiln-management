<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->simplePaginate(10);

        return view('clients.index', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validate = request()->validateWithBag('create_client', [
            'name' => 'required|unique:clients',
            'city' => 'nullable',
            'address_1' => 'nullable',
            'address_2' => 'nullable',
            'pib' => 'nullable',
            'mb' => 'nullable',
            'contact' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'state' => 'nullable',
            'notes' => 'nullable'
        ]);

        Client::create($validate);

        return redirect(route('clients-index'))->with('message', 'Novi klijent uspesno kreiran');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        if ($request['name'] == $client->name) {
            $validate = request()->validateWithBag('edit_client', [
                'name' => 'required',
                'city' => 'nullable',
                'address_1' => 'nullable',
                'address_2' => 'nullable',
                'pib' => 'nullable',
                'mb' => 'nullable',
                'contact' => 'nullable',
                'email' => 'nullable|email',
                'website' => 'nullable',
                'state' => 'nullable',
                'notes' => 'nullable'
            ]);
        } else {
            $validate = request()->validateWithBag('edit_client', [
                'name' => 'required|unique:clients',
                'city' => 'nullable',
                'address_1' => 'nullable',
                'address_2' => 'nullable',
                'pib' => 'numeric|nullable',
                'mb' => 'numeric|nullable',
                'contact' => 'numeric|nullable',
                'email' => 'nullable|email',
                'website' => 'nullable',
                'state' => 'nullable',
                'notes' => 'nullable'
            ]);
        }

        $client->update($validate);

        return back()->with('message', 'Klijent uspesno izmenjen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect(route('clients-index'))->with('message', 'Klijent uspesno izbrisan');
    }

    public function destroyChecked(Request $request)
    {
        Client::whereIn('id', $request->input('deleteChecked'))->delete();
        return back()->with('message', 'Klijent uspesno izbrisan');
    }



}
