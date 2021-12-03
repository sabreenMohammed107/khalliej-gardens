<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_breif',
        'ar_brief',
        'image',
        'en_overview',
        'ar_overview',
        'order',
    ];
    public function service(){
        return $this->hasMany('App\Models\Service', 'category_id','id');
    }
}
