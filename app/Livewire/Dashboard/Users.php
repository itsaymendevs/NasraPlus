<?php

namespace App\Livewire\Dashboard;

use App\Models\Country;
use App\Models\DeliveryRegion;
use App\Models\State;
use App\Models\User;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{



    use HelperTrait;
    use WithPagination;


    // :: variables
    public $searchUser, $searchCountry, $searchState, $searchRegion;









    public function render()
    {





        // 1: dependencies
        $countries = Country::all();

        $users = User::where('firstName', 'LIKE', '%' . $this->searchUser . '%')
            ->orWhere('lastName', 'LIKE', '%' . $this->searchUser . '%')->get();








        // -------------------------------------------------
        // -------------------------------------------------







        // 1.2: filterUsers
        $filtered = $users->filter(function ($item) {

            $toReturn = true;



            // 1.2: country
            $this->searchCountry ? $item?->countryId != $this->searchCountry ? $toReturn = false : null : null;




            // 1.3: country => Sudan
            if ($this->searchCountry == 1) {


                // :: state - region
                $this->searchState ? $item?->stateId != $this->searchState ? $toReturn = false : null : null;
                $this->searchRegion ? $item?->deliveryRegionId != $this->searchRegion ? $toReturn = false : null : null;


            } // end if



            return $toReturn;




        }); // endFilters






        // 1.3: getUsers
        $users = User::orderBy('created_at', 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->paginate(env('PAGINATE_XXL'));









        return view('livewire.dashboard.users', compact('countries', 'users'));



    } // end function






} // end class
