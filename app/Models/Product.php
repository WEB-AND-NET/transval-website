<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'images',
        'price'
    ];

    public $casts = [
        'images' => 'array'
    ];

    public function categories(){
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
