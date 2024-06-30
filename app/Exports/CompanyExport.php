<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class CompanyExport implements FromCollection, WithHeadings
{



    // :: variables
    public $companies;




    public function __construct($companies)
    {


        // :: handleParams
        $this->companies = $companies;



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






        // 1: loop - companies
        foreach ($this->companies as $company) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $company->id;
            $instance->name = $company->name;
            $instance->nameAr = $company->nameAr;



            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class
