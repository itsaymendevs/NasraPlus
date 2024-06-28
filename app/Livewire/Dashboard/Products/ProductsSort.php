<?php

namespace App\Livewire\Dashboard\Products;

use App\Models\Product;
use App\Traits\HelperTrait;
use Livewire\Component;

class ProductsSort extends Component
{


    use HelperTrait;

    public $products, $type;






    public function mount($type)
    {


        // 1: getParams
        $this->type = $type;





        // 1.2: get instance
        if ($type == 'home') {

            $this->products = Product::where('isMainPage', true)?->orderBy('indexMainPage')->get();


        } else {

            $this->products = Product::where('typeId', $type)?->orderBy('index')->get();

        } // end if





    } // end function







    // ---------------------------------------------------------------------------








    public function update($list)
    {



        // 1: loop - list
        foreach ($list ?? [] as $key => $productId) {


            // 1.2: get instance
            $product = Product::find($productId);




            // 1.3: updateIndex
            if ($this->type == 'home') {

                $product->indexMainPage = $key + 1;

            } else {

                $product->index = $key + 1;

            } // end if





            $product->save();


        } // end loop



        $this->alert('info', 'Categories has been sorted');


    } // end function









    // ---------------------------------------------------------------------------








    public function render()
    {


        return view('livewire.dashboard.products.products-sort');


    } // end function






} // end class
