<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class UnitExport implements FromCollection, WithHeadings
{

    // :: variables
    public $units;




    public function __construct($units)
    {


        // :: handleParams
        $this->units = $units;



    } // end function







    // ------------------------------------------------------------------






    public function headings() : array
    {

        // 1: headings
        return ["ID", "Name", "Abbreviation", "Name in Arabic", "Abbreviation in Arabic"];



    } // end headings







    // ------------------------------------------------------------------








    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - units
        foreach ($this->units as $unit) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $unit->id;
            $instance->name = $unit->name;
            $instance->abbreviation = $unit->abbreviation;

            $instance->nameAr = $unit->nameAr;
            $instance->abbreviationAr = $unit->abbreviationAr;


            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class
