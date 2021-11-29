<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberIncomingItems extends Model
{
    use HasFactory;

    protected $fillable= ['item_name', 'quantity', 'cubic_metre'];
    public function timberincoming(){
        
        return $this->belongsTo(TimberIncoming::class);
    }
}
