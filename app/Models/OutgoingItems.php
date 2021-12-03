<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgoingItems extends Model
{
    use HasFactory;

    protected $fillable= ['item_name', 'quantity', 'cubic_metre'];
    public function outgoing(){
        
        return $this->belongsTo(Outgoing::class);
    }
}
