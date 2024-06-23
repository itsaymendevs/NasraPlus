<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use stdClass;

class ProductExport implements FromCollection, WithHeadings
{


    // :: variables
    public $products;




    public function __construct($products)
    {


        // :: handleParams
        $this->products = $products;



    } // end function







    // ------------------------------------------------------------------






    public function headings() : array
    {

        // 1: headings
        return ["SN", "Name", "Hidden", "on Home", "Company", "Category", "Sub-Category", 'Type', 'Original Price', 'Sell Price', 'Offer Price', 'Size/Weight', 'Remaining Quantity', 'no. of Favoring', 'no. of Quantity Ordered', 'Total Original Orders Price', 'Total Orders Price'];




    } // end headings







    // ------------------------------------------------------------------








    public function collection()
    {



        // :: root
        $combine = array();






        // 1: loop - products
        foreach ($this->products as $product) {



            // 1.2: instance
            $instance = new stdClass();




            // 1.3: general
            $instance->id = $product->serial;
            $instance->name = $product->name;
            $instance->isHidden = boolval($product->isHidden) === true ? 'Yes' : 'No';
            $instance->isMainPage = boolval($product->isMainPage) === true ? 'Yes' : 'No';




            // 1.4: company - category - etc
            $instance->company = $product?->company?->name;
            $instance->mainCategory = $product?->category?->name;
            $instance->subCategory = $product?->subCategory?->name;
            $instance->type = $product?->type?->name;




            // 1.5: prices
            $instance->buyPrice = $product?->buyPrice;
            $instance->sellPrice = $product?->sellPrice;
            $instance->offerPrice = $product?->offerPrice;




            // 1.6: weight - quantity
            $instance->weight = $product->weightOption . ($product->weight ? ' / ' . $product->weight : '');
            $instance->quantity = $product?->quantity;





            // 1.7: favorites
            $instance->favorites = $product->favorites?->count() != 0 ? $product?->favorites?->count() : '0';








            // ------------------------------------------------
            // ------------------------------------------------





            // 2: totalQuantity - totalBuyPrice - totalSellPrice
            $instance->totalQuantityOrdered = $product->orders->count() != 0 ? $product->orders->sum('orderProductQuantity') : '0';
            $instance->totalBuyPriceOrdered = $product->orders->count() != 0 ? $product->orders->sum('orderBuyProductPrice') : '0';
            $instance->totalSellPriceOrdered = $product->orders->count() != 0 ? $product->orders->sum('orderProductPrice') : '0';




            array_push($combine, $instance);


        } // end loop









        return collect($combine);



    } // end function







} // end class
