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
        foreach ($rows?->whereNotNull() ?? [] as $key => $row) {



            // :: exceptHeaders
            if ($key != 0 && count($row ?? []) >= 18 && ! empty($row[0])) {



                // 1.5: checkExisting
                $checkProduct = Product::where('serial', $row[0])->count();


                if ($checkProduct == 0) {




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
                    $product->buyPrice = doubleval($row[5] ?? 0);
                    $product->sellPrice = doubleval($row[6] ?? 0);
                    $product->offerPrice = $row[7] ? doubleval($row[7]) : null;






                    // --------------------------------------------------
                    // --------------------------------------------------





                    // 2.4: weight - units - quantity
                    $product->weightOption = trim($row[8]);
                    $product->weight = $row[9] ?? null;

                    if ($product->weightOption != 'Namefull') {

                        $product->unitId = $row[10] ?? null;

                    } // end if





                    $product->units = $row[11] ? doubleval($row[11]) : null;
                    $product->quantityPerUnit = $row[12] ? doubleval($row[12]) : null;
                    $product->quantity = $row[13] ? doubleval($row[13]) : 0;
                    $product->maxQuantityPerOrder = $row[14] ? doubleval($row[14]) : 0;








                    // 2.5: information
                    $product->information = $row[15] ?? null;
                    $product->informationAr = $row[16] ?? null;



                    // 2.5: hidden - mainPage
                    $product->isHidden = boolval($row[17] ? strtolower($row[17]) : false);
                    $product->isMainPage = boolval($row[18] ? strtolower($row[18]) : false);






                    // 2.9: sortCategory
                    $product->index = (Product::where('typeId', $product->typeId)?->orderBy('index', 'desc')?->first()?->index ?? 0) + 1;





                    // 2.9.5: sortMainPage
                    if ($product->isMainPage)
                        $product->indexMainPage = (Product::where('isMainPage', true)?->orderBy('indexMainPage', 'desc')?->first()?->indexMainPage ?? 0) + 1;






                    // 2.9.6: imageFile
                    $product->imageFile = $product?->serial ? "{$product->serial}.png" : null;


                    $product->save();





                } // end if - existing

            } // end if

        } // end loop



    } // end function





} // end class
