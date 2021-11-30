<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\TimberOutgoing;
use App\Models\TimberOutgoingItems;
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
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $timberoutgoing = TimberOutgoing::with('clients')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('timberoutgoing.index', compact('timberoutgoing', 'clients'));
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
        $validate = request()->validateWithBag('create_timber_outgoing', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);
       
        $timberoutgoing = TimberOutgoing::create($validate);
  
        foreach($request->items as $item) {
            $timberoutgoing->timberoutgoingitems()->create($item);
        }
        
        return redirect(route('timberoutgoing.index'))->with('message', 'Uspesan unos.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function show(TimberOutgoing $timberoutgoing)
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $items = $timberoutgoing->timberoutgoingitems()->get();
        $client = $timberoutgoing->clients()->first();
        return view('timberoutgoing.show', compact('client','clients', 'items', 'timberoutgoing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function edit(TimberOutgoing $timberoutgoing)
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
    public function update(Request $request, TimberOutgoing $timberoutgoing)
    {
        $validate = request()->validateWithBag('edit_timber_outgoing', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);
       
        $timberoutgoing = update($validate);
  
        foreach($request->items as $item) {
            $timberoutgoing->timberoutgoingitems()->update($item);
        }
        
        return redirect(route('timberoutgoing.show'))->with('message', 'Uspesan unos.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimberOutgoing  $timberOutgoing
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimberOutgoing $timberoutgoing)
    {
        $timberoutgoing->delete();

        return redirect(route('timberoutgoing.index'))->with('message', 'Izlaz uspesno obrisan.');
    }

     public function destroyChecked(Request $request){

        TimberOutgoing::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('timberoutgoing.index'))->with('message', 'Svi izlazi su uspesno obrisani.');
    }
}
