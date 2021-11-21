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
            'temp_current' => 'nullable',
            'temp_needed' => 'nullable',
            'moisture_current' => 'nullable',
            'moisture_needed' => 'nullable'
        ]);

        DrykilnReadings::create($validator);

        return back()->with('message', 'Uspesan unos');

    }
}
