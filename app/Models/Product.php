<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name',
        'price',
        'category_id',
    ];

    //  Mỗi Product thuộc về 1 Category
    public function category()  {
        return $this->belongsTo(Category::class);
    }
}
