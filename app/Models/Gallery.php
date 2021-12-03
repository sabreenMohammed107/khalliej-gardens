<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_text',
        'ar_text',
        'image',
        'gallery_category_id',
        'order',
        'active',
        'type',
    ];
    public function cat(){
        return $this->belongsTo('App\Models\Gallery_category', 'gallery_category_id');
    }
}

