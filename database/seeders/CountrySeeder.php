<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CountrySeeder extends Seeder
{


    public function run() : void
    {


        // ::root
        $countries = Storage::disk('public')->get('sources/countries.json');
        $countries = json_decode($countries, true);


        for ($i = 0; $i < count($countries); $i++) {
            Country::create([
                'name' => $countries[$i]['name'],
                'nameAr' => $countries[$i]['nameAr'],
                'code' => $countries[$i]['code'],
                'toSDG' => $countries[$i]['toSDG'],
                'currency' => $countries[$i]['currency'],
                'isServiceActive' => $countries[$i]['isServiceActive'],
                'isOrderingActive' => $countries[$i]['isOrderingActive'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        } // end loop




    } // end function



} // end seeder
