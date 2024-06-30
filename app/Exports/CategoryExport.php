<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class CategoryExport implements FromCollection, WithHeadings
{


    // :: variables
    public $categories;




    public function __construct($categories)
    {


        // :: handleParams
        $this->categories = $categories;



    } // end function







    // ------------------------------------------------------------------






    public function headings() : array
    {

        // 1: headings
        return ["ID", "Name", "Name in Arabic"];



    } // end headings







    // ------------------------------------------------------------------








    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - categories
        foreach ($this->categories as $category) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $category->id;
            $instance->name = $category->name;
            $instance->nameAr = $category->nameAr;



            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class




