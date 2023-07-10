<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'featured_image_url',
        'price',
        'quantity',
        'category_id',
        'discount_id'
    ];

    public function images():MorphMany
    {
        return $this->morphMany(Image::class, 'imagable');
    }

    public function category(){
        return $this->belongsTo(\App\Models\Category::class,'category_id','id');
    }
    public function discount(){
        return $this->belongsTo(\App\Models\Discount::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
