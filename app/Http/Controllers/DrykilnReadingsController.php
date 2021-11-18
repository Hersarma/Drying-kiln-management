<?php

namespace App\Http\Controllers;
use App\Models\DrykilnReadings;
use Illuminate\Http\Request;

class DrykilnReadingsController extends Controller
{
    public function store(Request $request){

        $validator = $request->validateWithBag('create_drykiln_readings',[
            'drying_proces_id' => 'required',
            'moisture_probe_1' => 'nullable',
            'moisture_probe_2' => 'nullable',
            'moisture_probe_3' => 'nullable',
            'moisture_probe_4' => 'nullable',
            'moisture_probe_5' => 'nullable',
            'moisture_probe_6' => 'nullable',
            'moisture_probes_average' => 'nullable',
            'temp_current' => 'required',
            'temp_needed' => 'required',
            'moisture_current' => 'required',
            'moisture_needed' => 'required'
        ]);

        DrykilnReadings::create($validator);

        return back()->with('message', 'Uspesan unos');

    }
}
