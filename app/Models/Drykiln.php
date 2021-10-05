<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DryKiln extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function dry_kiln_config(){

        return $this->hasOne(DryKilnConfig::class)->withDefault();
    }
}
