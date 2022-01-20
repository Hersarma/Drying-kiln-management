<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    use HasFactory, SoftDeletes;


    protected $guarded = ['text', 'subject', 'from', 'name', 'attachment'];
}
