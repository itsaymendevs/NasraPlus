<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }



    public function mainCategory()
    {
        return $this->belongsTo(Category::class, 'mainCategoryId');
    }


    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subCategoryId');
    }



    public function type()
    {
        return $this->belongsTo(Type::class, 'typeId');
    }



    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unitId');
    }




    // ----------------------------------------------------------
    // ----------------------------------------------------------




    public function favorites()
    {
        return $this->hasMany(UserFavorite::class, 'productId');
    }


    public function orders()
    {
        return $this->hasMany(OrderProduct::class, 'productId');
    }






} // end modal
