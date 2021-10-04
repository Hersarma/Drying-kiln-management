<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrykilnConfig extends Model
{
    use HasFactory;

    public function drykiln(){

        return $this->belongsTo(Drykiln::class, 'drykiln_id');
    }
}
