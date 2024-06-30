<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;



    public function tooltipDetails()
    {


        // 1: root
        $details = [];




        // 1.2: general
        array_push($details, $this->accountNumber);
        array_push($details, $this->name);
        array_push($details, $this->accountName);



        return implode('<br />', $details);


    } // end function







} // end model
