<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberOutgoingItems extends Model
{
    use HasFactory;

    rotected $fillable= ['item_name', 'quantity', 'cubic_metre'];
    public function timberoutgoing(){
        
        return $this->belongsTo(TimberOutgoing::class);
    }
}
