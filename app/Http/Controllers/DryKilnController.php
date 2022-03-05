<?php
namespace App\Http\Controllers;
use App\Models\DryKiln;
use App\Models\Client;
use Illuminate\Http\Request;
class DryKilnController extends Controller
{
public function index(){

    $clients = Client::orderBy('name', 'asc')->simplePaginate(50,['name']);
    $drykilns = DryKiln::with('dry_kiln_config')->get();

    return view('drykiln.index', compact('drykilns', 'clients'));

}
public function store(Request $request){

    $validate = $request->validateWithBag('create_drykiln', [
    'name' => 'required|unique:dry_kilns'
    ]);

    DryKiln::create($validate);

    return redirect(route('drykiln.index'))->with('message', 'Susara uspešno snimljena');
}

public function update(DryKiln $drykiln, Request $request){
    if ($request['name'] == $drykiln->name) {
        $validate = $request->validateWithBag('edit_drykiln', [
        'name' => 'required'
        ]);
    } else{
         $validate = $request->validateWithBag('edit_drykiln', [
        'name' => 'required|unique:dry_kilns'
        ]);
    }
    $drykiln->update($validate);

    return redirect(route('drykiln.show', $drykiln))->with('message', 'Sušara uspešno izmenjena.');
}

public function show(DryKiln $drykiln){

        $clients = Client::orderBy('name', 'asc')->simplePaginate(50,['name']);
        $proces = $drykiln->dryKilnProces()->where('active', true)->first();

        if($proces){

           $readings = $proces->drykilnreadings()->orderBy('created_at', 'desc')->simplePaginate(10);
           return view('drykiln.show', compact('drykiln', 'readings', 'proces', 'clients'));
        }
     
    return view('drykiln.show', compact('drykiln', 'clients'));
}

public function destroy(DryKiln $drykiln){
    $drykiln->delete();
    return redirect(route('drykiln.index'))->with('message', 'Sušara uspešno izbrisana.');
}
}
