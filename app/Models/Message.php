<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message_date',
    'mobile',
    'name',
    'email',
    'message_type_id',
    'address',
    'message',
    ];
}
