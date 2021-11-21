<?php

namespace App\Http\Controllers;
use App\Models\DryKilnConfig;
use App\Models\DryingProces;
use Illuminate\Http\Request;

class DryKilnConfigController extends Controller
{
    public function store(Request $request){

         $validator = $request->validateWithBag('create_drykiln_config',[
            'dry_kiln_id' => 'required',
            'dry_kiln_status' => 'required',
            'client' => 'required',
            'type_of_wood' => 'required',
            'notes' => 'nullable',
            'probe_1_status' => 'nullable',
            'probe_2_status' => 'nullable',
            'probe_3_status' => 'nullable',
            'probe_4_status' => 'nullable',
            'probe_5_status' => 'nullable',
            'probe_6_status' => 'nullable'
         ]);

         DryKilnConfig::create($validator);
         
         $drying_proces = new DryingProces;

         $drying_proces->dry_kiln_id = $request->dry_kiln_id;
         $drying_proces->active = true;

         $drying_proces->save();

         $drying_proces->drykilnreadings()->create();

         return redirect(route('drykiln.index'))->with('message', 'Susara uspesno startovana');

    }

   public function update(DryKilnConfig $drykilnconfig, Request $request){

    $validator = $request->validateWithBag('edit_drykiln_config',[

            'client' => 'required',
            'type_of_wood' => 'required',
            'notes' => 'nullable',
            'probe_1_status' => 'nullable',
            'probe_2_status' => 'nullable',
            'probe_3_status' => 'nullable',
            'probe_4_status' => 'nullable',
            'probe_5_status' => 'nullable',
            'probe_6_status' => 'nullable'
         ]);

    $drykilnconfig->update($validator);

    return back()->with('message', 'Konfiguracija uspesno snimljena');

   }

   public function destroy(DryKilnConfig $drykilnconfig){

    $drykiln = $drykilnconfig->dry_kiln()->first();
    $proces = $drykiln->dryKilnProces()->where('active', true)->first();
    $proces->active = false;
    $proces->save();
    //dd($proces);
    $drykilnconfig->delete();

    return redirect(route('drykiln.show', $drykiln))->with('message', 'Proces susenja zavrsen');
    
   }
}
