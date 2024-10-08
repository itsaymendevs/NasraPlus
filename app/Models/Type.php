<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }



    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategoryId');
    }


    public function products()
    {
        return $this->hasMany(Product::class, 'typeId');
    }



} // end model
