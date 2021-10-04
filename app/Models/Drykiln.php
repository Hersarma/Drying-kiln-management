<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drykiln extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function drykiln_startup_settings(){

        return $this->hasOne(DrykilnStartupSettings::class);
    }
}
