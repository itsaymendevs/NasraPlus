<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{


    public function run() : void
    {


        // 1: create instance
        GeneralSetting::create([
            "isPickupActive" => true,
            "isDeliveryActive" => true,
            "isOrderingActive" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);



    } // end function



} // end seeder
