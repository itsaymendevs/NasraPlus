<?php

namespace Database\Seeders;

use App\Models\State;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StateSeeder extends Seeder
{
    public function run() : void
    {


        // ::root
        $states = Storage::disk('public')->get('sources/states.json');
        $states = json_decode($states, true);


        for ($i = 0; $i < count($states); $i++) {
            State::create([
                'name' => $states[$i]['name'],
                'nameAr' => $states[$i]['nameAr'],
                'countryId' => $states[$i]['countryId'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        } // end loop




    } // end function



} // end seeder
