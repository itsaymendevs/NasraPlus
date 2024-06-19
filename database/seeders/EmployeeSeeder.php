<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeSeeder extends Seeder
{

    public function run() : void
    {


        // ::root
        $employees = Storage::disk('public')->get('sources/employees.json');
        $employees = json_decode($employees, true);


        for ($i = 0; $i < count($employees); $i++) {
            Employee::create([
                'name' => $employees[$i]['name'],
                'nameAr' => $employees[$i]['nameAr'],
                'password' => Hash::make($employees[$i]['password']),
                'permission' => $employees[$i]['permission'],
                'isActive' => $employees[$i]['isActive'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        } // end loop




    } // end function



} // end seeder
