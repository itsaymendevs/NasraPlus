<?php

namespace Database\Seeders;

use App\Models\MediaInformation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{

    public function run() : void
    {


        // 1: create instance
        MediaInformation::create([
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);



    } // end function



} // end seeder
