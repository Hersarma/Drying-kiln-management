<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DryKilnConfig extends Model
{
    use HasFactory;
    protected $fillable = ['dry_kiln_id','dry_kiln_status','client', 'type_of_wood', 'notes', 'probe_1_status', 'probe_2_status', 'probe_3_status', 'probe_4_status', 'probe_5_status', 'probe_6_status' ];

    public function dry_kiln(){

        return $this->belongsTo(DryKiln::class);
    }
}
