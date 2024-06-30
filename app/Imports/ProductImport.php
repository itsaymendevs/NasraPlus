<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\Type;
use App\Traits\HelperTrait;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImport implements ToCollection
{


    use HelperTrait;



    public function collection(Collection $rows)
    {



        // 1: loop - rows
        foreach ($rows ?? [] as $key => $row) {



            // :: exceptHeaders
            if ($key != 0 && count($row ?? []) >= 18) {



                // 2: create instance
                $product = new Product();





                // 2.1: general
                $product->serial = $row[0];
                $product->name = $row[1];
                $product->nameAr = $row[2];


                // 2.2: company - categories
                $product->companyId = $row[3];
                $product->typeId = $row[4];


                // 2.2.5: getCategory - subCategory
                $type = Type::find($row[4]);
                $product->categoryId = $type->categoryId;
                $product->subCategoryId = $type->subCategoryId;







                // ----------------------------------------------
                // ----------------------------------------------








                // 2.3: buyPrice - sellPrice - offerPrice
                $product->buyPrice = $row[5] ?? 0;
                $product->sellPrice = $row[6] ?? 0;
                $product->offerPrice = $row[7] ?? null;






                // --------------------------------------------------
                // --------------------------------------------------





                // 2.4: weight - units - quantity
                $product->weightOption = $row[8];
                $product->weight = $row[9];
                $product->unitId = $row[10];



                $product->units = $row[11] ?? null;
                $product->quantityPerUnit = $row[12] ?? null;
                $product->quantity = $row[13] ?? 0;
                $product->maxQuantityPerOrder = $row[14] ?? 0;








                // 2.5: information
                $product->information = $row[15] ?? null;
                $product->informationAr = $row[16] ?? null;



                // 2.5: hidden - mainPage
                $product->isHidden = boolval($row[17] ?? false);
                $product->isMainPage = boolval($row[18] ?? false);






                // 2.9: sortCategory
                $product->index = (Product::where('typeId', $product->typeId)?->orderBy('index', 'desc')?->first()?->index ?? 0) + 1;





                // 2.9.5: sortMainPage
                if ($product->isMainPage)
                    $product->indexMainPage = (Product::where('isMainPage', true)?->orderBy('indexMainPage', 'desc')?->first()?->indexMainPage ?? 0) + 1;





                $product->save();







            } // end if


        } // end loop



    } // end function





} // end class
