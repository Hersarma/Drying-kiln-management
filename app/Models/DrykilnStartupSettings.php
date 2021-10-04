<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrykilnStartupSettings extends Model
{
    use HasFactory;

    public function drykiln(){

        return $this->belongsTo(Drykiln::class);
    }
}
