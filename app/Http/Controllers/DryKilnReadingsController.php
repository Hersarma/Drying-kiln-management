<?php

namespace App\Http\Controllers;
use App\Models\DrykilnReadings;
use Illuminate\Http\Request;

class DryKilnReadingsController extends Controller
{
    public function store(Request $request){

        $validator = $request->validateWithBag('create_drykiln_readings',[
            'drying_proces_id' => 'required',
            'moisture_probe_1' => 'nullable|numeric',
            'moisture_probe_2' => 'nullable|numeric',
            'moisture_probe_3' => 'nullable|numeric',
            'moisture_probe_4' => 'nullable|numeric',
            'moisture_probe_5' => 'nullable|numeric',
            'moisture_probe_6' => 'nullable|numeric',
            'moisture_probes_average' => 'nullable|numeric',
            'temp_current' => 'nullable|numeric',
            'temp_needed' => 'nullable|numeric',
            'moisture_current' => 'nullable|numeric',
            'moisture_needed' => 'nullable|numeric'
        ]);

        DrykilnReadings::create($validator);

        return back()->with('message', 'Uspesan unos');

    }
}
