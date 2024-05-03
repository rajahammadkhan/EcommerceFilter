<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'size',
        'colour',
        'brand',
        'price',
        'status',
        'image',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
