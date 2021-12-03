<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;

    
    protected $fillable = ['client_id', 'notes', 'transport_company', 'invoice_number'];

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function incomingitems(){

        return $this->hasMany(IncomingItems::class);
    }
}
