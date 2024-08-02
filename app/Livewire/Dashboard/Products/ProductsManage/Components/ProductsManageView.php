<?php

namespace App\Livewire\Dashboard\Products\ProductsManage\Components;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use App\Traits\HelperTrait;
use Livewire\Component;

class ProductsManageView extends Component
{

    use HelperTrait;



    // :: variables
    public ProductForm $instance;
    public $counter;



    public function mount($id, $counter)
    {



        // 1: get instance
        $product = Product::find($id);
        $this->counter = $counter;


        foreach ($product?->toArray() ?? [] as $key => $value)
            $this->instance->{$key} = $value;




    } // end function











    // ---------------------------------------------------------------------------









    public function update()
    {



        // 1: get instance
        $product = Product::find($this->instance->id);


        if ($this->instance?->sellPrice) {




            // 1.2: buyPrice - sellPrice - offerPrice
            $product->sellPrice = $this->instance->sellPrice ?? null;
            $product->offerPrice = $this->instance->offerPrice ?? null;
            $product->quantity = $this->instance->quantity ?? 0;






            // 1.3: checkOfferPrice
            if ($this->instance?->offerPrice && $this->instance?->offerPrice > $this->instance->sellPrice) {

                $this->makeAlert('info', 'Sell price cannot be less than offer price!');

                return false;

            } // end if






            // 2: reset
            $product->quantity == "" ? $product->quantity = 0 : null;
            $product->offerPrice == "" ? $product->offerPrice = null : null;


            $product->save();



        } // end if






    } // end function












    // ---------------------------------------------------------------------------







    public function render()
    {


        return view('livewire.dashboard.products.products-manage.components.products-manage-view');


    } // end function




} // end class
