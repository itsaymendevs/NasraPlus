<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    use HasFactory;


    public function terms() {
        return $this->hasMany(CountryTerm::class, 'countryId');
    }

    public function contact() {
        return $this->hasOne(CountryContact::class, 'countryId');
    }


    public function contactPhones() {
        return $this->hasMany(CountryPhone::class, 'countryId');
    }




} // end modal
