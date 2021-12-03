<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_desc',
        'ar_desc',
        'category_id',
        'image',
        'order',
    ];
    public function cat(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
