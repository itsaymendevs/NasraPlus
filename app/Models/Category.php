<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'categoryId');
    }


    public function types()
    {
        return $this->hasMany(Type::class, 'categoryId');
    }


    public function products()
    {
        return $this->hasMany(Product::class, 'categoryId');
    }


} // end model
