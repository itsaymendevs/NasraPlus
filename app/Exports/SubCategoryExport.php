<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class SubCategoryExport implements FromCollection, WithHeadings
{


    // :: variables
    public $subCategories;




    public function __construct($subCategories)
    {


        // :: handleParams
        $this->subCategories = $subCategories;



    } // end function







    // ------------------------------------------------------------------






    public function headings() : array
    {

        // 1: headings
        return ["ID", "Category", "Name", "Name in Arabic"];


    } // end headings







    // ------------------------------------------------------------------








    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - subCategories
        foreach ($this->subCategories as $subCategory) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $subCategory->id;
            $instance->category = $subCategory->category?->name;
            $instance->name = $subCategory->name;
            $instance->nameAr = $subCategory->nameAr;



            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class






