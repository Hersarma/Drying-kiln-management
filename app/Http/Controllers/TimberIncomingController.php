<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\TimberIncoming;
use App\Models\TimberIncomingItems;
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
        $clients = Client::orderBy('name', 'asc')->paginate(50,['id','name']);
        $timberincoming = TimberIncoming::with('clients')->orderBy('created_at', 'desc')->paginate(10);
        
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
            'items.*.type_of_wood' => 'required',
            'items.*.number_of_pallets' => 'numeric|required',
            'items.*.m3' => 'numeric|required'
        ]);

      /*$validateitems = request()->validateWithBag('items',[
            'items.*.type_of_wood' => 'required',
            'items.*.number_of_pallets' => 'numeric|required',
            'items.*.m3' => 'numeric|required',

        ]);*/
       
        $timberincoming = TimberIncoming::create($validate);
  
        foreach($request->items as $item) {
            $timberincoming->timberincomingitems()->create($item);
        }
        
        return redirect(route('timberincoming.index'))->with('message', 'Uspesan unos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function show(TimberIncoming $timberincoming)
    {
        $items = $timberincoming->timberincomingitems()->get();
        $client = $timberincoming->clients()->first();
        return view('timberincoming.show', compact('client', 'items', 'timberincoming'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimberIncoming $timberincoming)
    {
         $validate = request()->validateWithBag('edit_timber_incoming', [
            'client_id' => 'required',
            'notes' => 'nullable'
        ]);

        $timberincoming->update($validate);
        
        return redirect(route('timberincoming.show', $timberIncoming))->with('message', 'Uspesan unos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimberIncoming  $timberIncoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimberIncoming $timberincoming)
    {
        $timberincoming->delete();

        return redirect(route('timberincoming.index'))->with('message', 'Ulaz uspesno obrisan');
    }

    public function destroyChecked(Request $request){

        TimberIncoming::whereIn('id', $request->input('deleteChecked'))->delete();

        return redirect(route('timberincoming.index'))->with('message', 'Ulaz uspesno obrisan');
    }
}
