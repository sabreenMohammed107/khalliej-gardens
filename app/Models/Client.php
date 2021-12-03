<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_breif',
        'ar_brief',
        'logo',
        'en_overview',
        'ar_overview',
        'facebook',
        'twitter',
        'instgram',
        'youtube',
        'order',
        'active',
    ];

}
