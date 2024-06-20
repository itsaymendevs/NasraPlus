<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\CountryContact;
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

            $country = new Country();

            $country->name = $countries[$i]['name'];
            $country->nameAr = $countries[$i]['nameAr'];
            $country->code = $countries[$i]['code'];
            $country->toSDG = $countries[$i]['toSDG'];
            $country->currency = $countries[$i]['currency'];
            $country->isServiceActive = $countries[$i]['isServiceActive'];
            $country->isOrderingActive = $countries[$i]['isOrderingActive'];
            $country->created_at = Carbon::now();
            $country->updated_at = Carbon::now();


            $country->save();




            // ------------------------------
            // ------------------------------





            // 2: countryContact
            CountryContact::create([
                'countryId' => $country->id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);




        } // end loop




    } // end function



} // end seeder
