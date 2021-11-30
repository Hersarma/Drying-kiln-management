<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberOutgoing extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'notes', 'transport_company', 'invoice_number'];

    public function clients()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function timberoutgoingitems(){

        return $this->hasMany(TimberOutgoingItems::class);
    }
}
