<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Incoming;
use App\Models\IncomingItems;
use Illuminate\Http\Request;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $incoming = Incoming::with('clients')->orderBy('created_at', 'desc')->simplePaginate(10);
        
        return view('incoming.index', compact('incoming', 'clients'));
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validateWithBag('create_incoming', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable'
        ]);
        
        $validateItems = request()->validateWithBag('create_incoming_items', [
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);

        $incoming = Incoming::create($validate);

        foreach($request->items as $item) {
            $incoming->incomingitems()->create($item);
        }
        
        return redirect(route('incoming.index'))->with('message', 'Uspešan unos.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incoming  $Incoming
     * @return \Illuminate\Http\Response
     */
    public function show(Incoming $incoming)
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $items = $incoming->incomingitems()->get();
        $client = $incoming->clients()->first();
        return view('incoming.show', compact('client','clients', 'items', 'incoming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incoming  $Incoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incoming $incoming)
    {
        
         $validate = request()->validateWithBag('edit_incoming', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable'
        ]);

         $validateItems = request()->validateWithBag('edit_incoming_items', [
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);

        $incoming->update($validate);

            foreach($request->items as $item) {
            IncomingItems::where('id', '=', $item['id'])->update([
                'item_name' => $item['item_name'],
                'quantity' => $item['quantity'],
                'cubic_metre' => $item['cubic_metre']
            ]);
        }
        
        return redirect(route('incoming.show', $incoming))->with('message', 'Uspešna izmena.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incoming  $Incoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incoming $incoming)
    {
        $incoming->delete();

        return redirect(route('incoming.index'))->with('message', 'Ulaz uspešno obrisan.');
    }

    public function destroyChecked(Request $request){

        Incoming::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('incoming.index'))->with('message', 'Svi ulazi su uspešno obrisani.');
    }
}
