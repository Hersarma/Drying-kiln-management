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
        $timberincoming = Incoming::with('clients')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('timberincoming.index', compact('timberincoming', 'clients'));
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validateWithBag('create_timber_incoming', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);
       
        $timberincoming = Incoming::create($validate);
  
        foreach($request->items as $item) {
            $timberincoming->incomingitems()->create($item);
        }
        
        return redirect(route('timberincoming.index'))->with('message', 'Uspesan unos.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function show(Incoming $timberincoming)
    {
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $items = $timberincoming->incomingitems()->get();
        $client = $timberincoming->clients()->first();
        return view('timberincoming.show', compact('client','clients', 'items', 'timberincoming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incoming $timberincoming)
    {
         $validate = request()->validateWithBag('edit_timber_incoming', [
            'client_id' => 'required',
            'notes' => 'nullable',
            'transport_company' => 'nullable',
            'invoice_number' => 'nullable',
            'items.*.item_name' => 'required',
            'items.*.quantity' => 'numeric|required',
            'items.*.cubic_metre' => 'numeric|required'
        ]);

        $timberincoming->update($validate);

         foreach($request->items as $item) {
            $timberincoming->incomingitems()->update($item);
        }
        
        return redirect(route('timberincoming.show', $timberincoming))->with('message', 'Uspesna izmena.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incoming $timberincoming)
    {
        $timberincoming->delete();

        return redirect(route('timberincoming.index'))->with('message', 'Ulaz uspesno obrisan.');
    }

    public function destroyChecked(Request $request){

        Incoming::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('timberincoming.index'))->with('message', 'Svi Ulazi su uspesno obrisani.');
    }
}
