<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagable_type',
        'imagable_id',
        'image_url'
    ];
    protected $table = 'images';

    public function imagable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__,'imagable_type','imagable_id');
    }
}
