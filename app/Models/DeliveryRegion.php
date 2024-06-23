<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryRegion extends Model
{
    use HasFactory;


    public function state()
    {

        return $this->belongsTo(State::class, 'stateId');

    } // end function



    public function deliveryTime()
    {

        return $this->belongsTo(DeliveryTime::class, 'deliveryTimeId');

    } // end function



    public function users()
    {

        return $this->hasMany(User::class, 'deliveryRegionId');

    } // end function







} // end class
