<?php

namespace App\Livewire\Dashboard\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use Livewire\Component;

class ProductsEdit extends Component
{


    public ProductForm $instance;



    public function mount($id)
    {

        $this->product = Product::find($id);


        foreach ($this->product?->toArray() ?? [] as $key => $value)
            $instance->{$key} = $value;

    } // end function










    // -------------------------------------------------------------







    public function render()
    {

        return view('livewire.dashboard.products.products-edit');

    } // end function


} // end class
