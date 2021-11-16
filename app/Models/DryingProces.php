<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DryingProces extends Model
{
    use HasFactory;

    public function drykilnreadings(){

        return $this->hasMany(DrykilnReadings::class);
    }

    public function drykiln(){

        return $this->belongsTo(DryKiln::class);
    }
}
