<?php
namespace App\Http\Controllers;
use App\Models\DryKiln;
use App\Models\DryKilnConfig;
use App\Models\Client;
use App\Models\DrykilnReadings;
use Illuminate\Http\Request;
class DryKilnController extends Controller
{
public function index(){

    $clients = Client::orderBy('name', 'asc')->simplePaginate(50,['name']);
    $drykilns = DryKiln::with('dry_kiln_config')->get();

    return view('drykiln.index', compact('drykilns', 'clients'));

}
public function store(Request $request){

    $validator = $request->validateWithBag('create_drykiln', [
    'name' => 'required|unique:dry_kilns'

    ]);
    DryKiln::create($validator);

    return redirect(route('drykiln.index'))->with('message', 'Susara uspesno snimljena');
}

public function show(DryKiln $drykiln){

    //dd($drykiln->dryKilnProces);
    $proces = $drykiln->dryKilnProces()->where('active', true)->first();
    //dd($proces->id);
    $readings = $proces->drykilnreadings()->simplePaginate(10);
    //dd($readings);
    return view('drykiln.show', compact('drykiln', 'readings', 'proces'));
}

public function destroy(DryKiln $drykiln){
    $drykiln->delete();
    return redirect(route('drykiln.index'));
}
}