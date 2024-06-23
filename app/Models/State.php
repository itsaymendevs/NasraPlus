<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;


    public function country()
    {
        return $this->belongsTo(Country::class, 'countryId');
    }


    public function provinces()
    {
        return $this->hasMany(StateProvince::class, 'stateId');
    }


    public function regions()
    {
        return $this->hasMany(DeliveryRegion::class, 'stateId');
    }



} // end modal
