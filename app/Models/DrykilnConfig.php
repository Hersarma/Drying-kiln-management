<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DryKilnConfig extends Model
{
    use HasFactory;

    public function dry_kiln(){

        return $this->belongsTo(DryKiln::class);
    }
}
