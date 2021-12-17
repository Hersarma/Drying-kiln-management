<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Outgoing;
use App\Models\OutgoingItems;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $outgoing = Outgoing::with('clients')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('outgoing.index', compact('outgoing', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validateWithBag('create_outgoing', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);
       
        $outgoing = Outgoing::create($validate);
  
        foreach($request->items as $item) {
            $outgoing->outgoingitems()->create($item);
        }
        
        return redirect(route('outgoing.index'))->with('message', 'Uspesan unos.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outgoing  $Outgoing
     * @return \Illuminate\Http\Response
     */
    public function show(Outgoing $outgoing)
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $items = $outgoing->outgoingitems()->get();
        $client = $outgoing->clients()->first();
        return view('outgoing.show', compact('client','clients', 'items', 'outgoing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outgoing  $Outgoing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outgoing $outgoing)
    {
        $validate = request()->validateWithBag('edit_outgoing', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);
       
        $outgoing->update($validate);
  
        foreach($request->items as $item) {
            OutgoingItems::where('id', '=', $item['id'])->update([
                'item_name' => $item['item_name'],
                'quantity' => $item['quantity'],
                'cubic_metre' => $item['cubic_metre']
            ]);
        }
        
        return redirect(route('outgoing.show', $outgoing))->with('message', 'Uspesan unos.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outgoing  $Outgoing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outgoing $outgoing)
    {
        $outgoing->delete();

        return redirect(route('outgoing.index'))->with('message', 'Izlaz uspesno obrisan.');
    }

     public function destroyChecked(Request $request){

        Outgoing::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('outgoing.index'))->with('message', 'Svi izlazi su uspesno obrisani.');
    }
}
