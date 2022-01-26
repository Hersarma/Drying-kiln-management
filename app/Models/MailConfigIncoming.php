<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfigIncoming extends Model
{
    use HasFactory;

    protected $fillable = ['host', 'port', 'encryption', 'username', 'password', 'protocol'];
}
