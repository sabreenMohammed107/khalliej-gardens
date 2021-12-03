<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_about_title',
        'ar_about_title',
        'en_about',
        'ar_about',
        'en_overview',
        'ar_overview',
        'en_vision',
        'ar_vision',
        'en_mission',
        'ar_mission',
        'en_value',
        'ar_value',
    ];
}
