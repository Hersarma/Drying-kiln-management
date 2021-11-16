<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrykilnReadings extends Model
{
    use HasFactory;

    public function dryKilnProces(){

        return $this->belongsTo(DryingProces::class);
    }
}
