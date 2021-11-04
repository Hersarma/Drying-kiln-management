<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberIncoming extends Model
{
    use HasFactory;

    
    protected $fillable = ['client_id', 'notes', 'transport_company', 'invoice_number'];

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function timberincomingitems(){

        return $this->hasMany(TimberIncomingItems::class);
    }
}
