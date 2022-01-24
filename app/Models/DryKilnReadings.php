<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DryKilnReadings extends Model
{
    use HasFactory;

    protected $fillable = ['drying_proces_id', 'temp_needed', 'temp_current', 'moisture_needed', 'moisture_current', 'moisture_probes_average', 'moisture_probe_1', 'moisture_probe_2', 'moisture_probe_3', 'moisture_probe_4', 'moisture_probe_5', 'moisture_probe_6'];

    public function dryKilnProces(){

        return $this->belongsTo(DryingProces::class);
    }
}
