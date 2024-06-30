<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class TypeExport implements FromCollection, WithHeadings
{

    // :: variables
    public $types;




    public function __construct($types)
    {


        // :: handleParams
        $this->types = $types;



    } // end function







    // ------------------------------------------------------------------






    public function headings() : array
    {

        // 1: headings
        return ["ID", "Category", "Sub-Category", "Name", "Name in Arabic"];


    } // end headings







    // ------------------------------------------------------------------








    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - types
        foreach ($this->types as $type) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $type->id;
            $instance->category = $type->category?->name;
            $instance->subCategory = $type->subCategory?->name;
            $instance->name = $type->name;
            $instance->nameAr = $type->nameAr;



            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class






