<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfigOutgoing extends Model
{
    use HasFactory;
     protected $fillable = [
        "protocol",
        "host",
        "port",
        "encryption",
        "username" ,
        "password",
        "sender_name",
        "sender_email"
    ];
}
