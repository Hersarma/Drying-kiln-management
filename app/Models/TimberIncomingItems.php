<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberIncomingItems extends Model
{
    use HasFactory;

    protected $fillable= ['type_of_wood', 'number_of_pallets', 'm3'];
    public function timberincoming(){
        
        return $this->belongsTo(TimberIncoming::class);
    }
}
