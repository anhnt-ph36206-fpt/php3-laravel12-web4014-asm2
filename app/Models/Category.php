<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
                                    //
    protected $fillable = ['name']; // protected $fillable = ['name']; // Cho phép gán giá trị cho cột name

    // Một Category có nhiều Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
