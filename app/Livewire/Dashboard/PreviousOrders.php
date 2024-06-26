<?php

namespace App\Livewire\Dashboard;

use App\Exports\PreviousOrderExport;
use App\Models\Country;
use App\Models\Order;
use App\Models\PickupStore;
use App\Traits\HelperTrait;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class PreviousOrders extends Component
{



    use HelperTrait;
    use WithPagination;




    // :: variables
    public $searchReceivingOption, $searchCountry, $searchState, $searchRegion, $searchStore, $searchOrderNumber, $searchSort, $searchStatus, $searchFromDate, $searchUntilDate;







    public function mount()
    {

        // 1: defaultValues
        $this->searchReceivingOption = 'Both';



    } // emd function










    // ---------------------------------------------------------------------------






    public function rerender()
    {

        $this->render();

    } // end function














    // ---------------------------------------------------------------------------










    public function export($lang)
    {


        // 1: prepExport




        // 1: currentOrders
        $orders = Order::whereIn('orderStatus', ['Canceled', 'Completed'])
            ->where('orderNumber', 'LIKE', '%' . $this->searchOrderNumber . '%')
            ->where('isConfirmed', 1)->get();









        // -------------------------------------------------
        // -------------------------------------------------







        // 1.5: filterOrders
        $filtered = $orders->filter(function ($item) {

            $toReturn = true;




            // 1.5.1: receivingOption
            ($this->searchReceivingOption && $this->searchReceivingOption != 'Both') ? $item?->receivingOption != $this->searchReceivingOption ? $toReturn = false : null : null;




            // 1.5.1: status
            $this->searchStatus ? $item?->orderStatus != $this->searchStatus ? $toReturn = false : null : null;



            // 1.5.2: fromDate - untilDate
            $this->searchFromDate ? date('Y-m-d', strtotime($item?->orderDateTime)) < $this->searchFromDate ? $toReturn = false : null : null;

            $this->searchUntilDate ? date('Y-m-d', strtotime($item?->orderDateTime)) > $this->searchUntilDate ? $toReturn = false : null : null;





            // 1.5.3: orderCountry
            $this->searchCountry ? $item?->countryId != $this->searchCountry ? $toReturn = false : null : null;




            // A: DeliveryOptions
            if ($this->searchReceivingOption == 'Delivery') {



                // 1.5.4: state
                $this->searchState ? $item?->stateId != $this->searchState ? $toReturn = false : null : null;


                // 1.5.5: region
                $this->searchRegion ? $item?->deliveryRegionId != $this->searchRegion ? $toReturn = false : null : null;




                // B: PickupOptions
            } elseif ($this->searchReceivingOption == 'Pickup') {


                // 1.5.6: store
                $this->searchStore ? $item?->storeId != $this->searchStore ? $toReturn = false : null : null;


            } // end if







            return $toReturn;




        }); // endFilters







        // -------------------------------------------------
        // -------------------------------------------------









        // 2: getOrders
        $orders = Order::orderBy('created_at', $this->searchSort == 'asc' ? 'asc' : 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->get();










        // 2: makeExport
        return Excel::download(new PreviousOrderExport($orders), 'previous-orders.xlsx');






    } // end function












    // ---------------------------------------------------------------------------








    public function render()
    {





        // 1: dependencies
        $countries = Country::all();
        $stores = PickupStore::all();
        $statuses = ['Canceled', 'Completed'];




        // 1.1: resetEmptyDates
        $this->searchFromDate == '' ? $this->searchFromDate = null : null;
        $this->searchUntilDate == '' ? $this->searchUntilDate = null : null;






        // 1: currentOrders
        $orders = Order::whereIn('orderStatus', ['Canceled', 'Completed'])
            ->where('orderNumber', 'LIKE', '%' . $this->searchOrderNumber . '%')
            ->where('isConfirmed', 1)->get();









        // -------------------------------------------------
        // -------------------------------------------------







        // 1.5: filterOrders
        $filtered = $orders->filter(function ($item) {

            $toReturn = true;




            // 1.5.1: receivingOption
            ($this->searchReceivingOption && $this->searchReceivingOption != 'Both') ? $item?->receivingOption != $this->searchReceivingOption ? $toReturn = false : null : null;




            // 1.5.1: status
            $this->searchStatus ? $item?->orderStatus != $this->searchStatus ? $toReturn = false : null : null;



            // 1.5.2: fromDate - untilDate
            $this->searchFromDate ? date('Y-m-d', strtotime($item?->orderDateTime)) < $this->searchFromDate ? $toReturn = false : null : null;

            $this->searchUntilDate ? date('Y-m-d', strtotime($item?->orderDateTime)) > $this->searchUntilDate ? $toReturn = false : null : null;





            // 1.5.3: orderCountry
            $this->searchCountry ? $item?->countryId != $this->searchCountry ? $toReturn = false : null : null;




            // A: DeliveryOptions
            if ($this->searchReceivingOption == 'Delivery') {



                // 1.5.4: state
                $this->searchState ? $item?->stateId != $this->searchState ? $toReturn = false : null : null;


                // 1.5.5: region
                $this->searchRegion ? $item?->deliveryRegionId != $this->searchRegion ? $toReturn = false : null : null;




                // B: PickupOptions
            } elseif ($this->searchReceivingOption == 'Pickup') {


                // 1.5.6: store
                $this->searchStore ? $item?->storeId != $this->searchStore ? $toReturn = false : null : null;


            } // end if







            return $toReturn;




        }); // endFilters







        // -------------------------------------------------
        // -------------------------------------------------









        // 2: getOrders
        $orders = Order::orderBy('created_at', $this->searchSort == 'asc' ? 'asc' : 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->paginate(env('PAGINATE_XXL'));




        $rawOrders = Order::orderBy('created_at', $this->searchSort == 'asc' ? 'asc' : 'desc')
            ->whereIn('id', $filtered?->pluck('id')?->toArray() ?? [])
            ->get();






        return view('livewire.dashboard.previous-orders', compact('countries', 'stores', 'statuses', 'orders', 'rawOrders'));



    } // end function


} // end class
