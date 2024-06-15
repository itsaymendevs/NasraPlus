<?php

namespace App\Providers;

use App\Traits\HelperTrait;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    use HelperTrait;



    public function register() : void
    {


    } // end function






    // -------------------------------------------------------------------




    public function boot() : void
    {


        // 1: defaultPreview
        View::share('defaultPreview', asset('assets/img/placeholder.png'));
        View::share('defaultUser', "user.png");



        // 1.2: currentDate - nextDate
        View::share('globalCurrentDate', $this->getCurrentDate());
        View::share('globalNextDate', $this->getNextDate());





        // 1.3: globalCounter
        View::share('globalSNCounter', 1);






    } // end function



} // end provider
