<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingItems extends Model
{
    use HasFactory;

    protected $fillable= ['incoming_id', 'item_name', 'quantity', 'cubic_metre'];
    public function incoming(){
        
        return $this->belongsTo(Incoming::class);
    }
}
