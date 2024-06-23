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



        // 1.2: buyPrice - sellPrice - offerPrice
        $product->sellPrice = $this->instance->sellPrice ?? null;
        $product->offerPrice = $this->instance->offerPrice ?? null;
        $product->quantity = $this->instance->quantity ?? 0;



        $product->save();



    } // end function












    // ---------------------------------------------------------------------------







    public function render()
    {


        return view('livewire.dashboard.products.products-manage.components.products-manage-view');


    } // end function




} // end class
