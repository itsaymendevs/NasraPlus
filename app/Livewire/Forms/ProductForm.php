<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{

    #[Validate('required')]
    public $serial, $name, $nameAr, $buyPrice, $sellPrice, $weightOption, $units, $quantityPerUnit, $quantity, $maxQuantityPerOrder, $imageFile, $companyId, $categoryId, $subCategoryId, $typeId;



    public $id, $information, $informationAr, $offerPrice, $index, $weight, $indexMainPage, $indexOffers, $isHidden, $isMainPage, $secondImageFile, $thirdImageFile, $fourthImageFile, $unitId;




    // :: helpers
    public $imageFileName, $secondImageFileName, $thirdImageFileName, $fourthImageFileName;

















} // end form
