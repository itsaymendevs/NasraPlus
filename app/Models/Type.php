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

    } // end function



    public function subCategory()
    {

        return $this->belongsTo(SubCategory::class, 'subCategoryId');

    } // end function





} // end model
