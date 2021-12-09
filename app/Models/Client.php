<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'address_1', 'address_2', 'pib', 'mb', 'contact', 'email', 'notes', 'website', 'state',];

    public function incoming(){

        return $this->hasMany(Incoming::class);
    }

    public function outgoing(){
        
        return $this->hasMany(Outgoing::class);
    }

}
