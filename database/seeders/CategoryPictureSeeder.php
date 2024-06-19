<?php

namespace Database\Seeders;

use App\Models\CategoryPicture;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPictureSeeder extends Seeder
{

    public function run() : void
    {


        // 1: create instance
        CategoryPicture::create([
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);



    } // end function



} // end seeder
