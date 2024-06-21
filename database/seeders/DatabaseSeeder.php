<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {


        $this->call([
            CountrySeeder::class,
            AboutSeeder::class,
            AddressSeeder::class,
            MediaSeeder::class,
            CategoryPictureSeeder::class,
            EmployeeSeeder::class,
            GeneralSettingSeeder::class,
            StateSeeder::class,
            MessageSeeder::class,
        ]);


    } // end function





} // end class
