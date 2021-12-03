<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_date',
        'en_title',
        'ar_title',
        'en_text',
        'ar_text',
        'image',
        'order',
        'active',
    ];
}
