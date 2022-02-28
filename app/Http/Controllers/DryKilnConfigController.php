<?php

namespace App\Http\Controllers;
use App\Models\DryKilnConfig;
use App\Models\DryingProces;
use App\Models\DryKiln;
use App\Models\NotificationMessage;
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
         $drying_proces->client = $request->client;

         $drying_proces->save();

         $drying_proces->drykilnreadings()->create();

         $drykiln = DryKiln::where('id', $request->dry_kiln_id)->first();
         NotificationMessage::create([
            'message' => 'Sušara '.$drykiln->name.' startovana.'
         ]);

         return redirect(route('drykiln.show', $request->dry_kiln_id))->with('message', 'Susara uspešno startovana');

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

    $drying_proces = DryingProces::find($request->proces_id);
    $drying_proces->client = $request->client;
    $drying_proces->save();

    return back()->with('message', 'Konfiguracija uspešno snimljena');

   }

   public function destroy(DryKilnConfig $drykilnconfig){

    $drykiln = $drykilnconfig->dry_kiln()->first();
    $proces = $drykiln->dryKilnProces()->where('active', true)->first();
    $proces->active = false;
    $proces->save();
    $drykilnconfig->delete();

    NotificationMessage::create([
            'message' => 'Sušara '.$drykiln->name.' ugašena.'
         ]);
    return redirect(route('drykiln.show', $drykiln))->with('message', 'Proces susenja završen');
    
   }
}
