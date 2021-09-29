<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberIncoming extends Model
{
    use HasFactory;


    protected $fillable = ['client_id', 'number_of_pallets', 'm3', 'notes'];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
