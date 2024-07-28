{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Edit Product</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.products') }}" title='Edit Product' />


    </section>
    {{-- endHeader --}}










    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}











    {{-- 1: section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- form --}}
        <form wire:submit='update' wire:loading.class='disabled' class="form--page mb-5">
            <div class="row">



                {{-- serial --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Serial</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.serial'>
                </div>







                {{-- togglers --}}
                <div class="col-6 align-self-end mb-4 d-flex justify-content-around align-items-center pb-3">


                    {{-- 1: hideProduct --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="toggle-checkbox-1"
                            wire:model='instance.isHidden'>
                        <label class="form-check-label" for="toggle-checkbox-1">Hide Product</label>
                    </div>



                    {{-- 2: mainPage --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="toggle-checkbox-2"
                            wire:model='instance.isMainPage'>
                        <label class="form-check-label" for="toggle-checkbox-2">Main Page</label>
                    </div>
                </div>







                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}








                {{-- name --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.name'>
                </div>


                {{-- nameAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input" type="text" required wire:model='instance.nameAr'>
                </div>






                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>






                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- subtitle --}}
                <div class="col-12">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr>
                        </div>
                        <div class="col-3">
                            <h5>General Details</h5>
                        </div>
                    </div>
                </div>









                {{-- compay --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Company</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select id='company-select-1' class="form-select form--select"
                            data-instance='instance.companyId' required>
                            <option value=""></option>

                            @foreach ($companies ?? [] as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach


                        </select>
                    </div>
                </div>




                {{-- cateogry --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select id='category-select-1' class="form-select form--select level--select level--one"
                            data-id='1' data-level='category' data-instance='instance.categoryId' required>
                            <option value=""></option>

                            @foreach ($categories ?? [] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>





                {{-- subCategory --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Sub Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select id='subCategory-select-1' class="form-select form--select level--select level--two"
                            data-id='1' data-level='subCategory' data-instance='instance.subCategoryId' required>
                            <option value=""></option>

                            @foreach ($subCategories ?? [] as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>




                {{-- type --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select id='type-select-1' class="form-select form--select level--select level--three"
                            data-id='1' data-level='type' data-instance='instance.typeId' required>
                            <option value=""></option>

                            @foreach ($types ?? [] as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>






                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}





                {{-- buyPrice --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Buy Price</label>
                    <input class="form-control form--input" type="number" step='0.01' min='0'
                        wire:model='instance.buyPrice' required>
                </div>


                {{-- sellPrice --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Sell Price</label>
                    <input class="form-control form--input" type="number" step='0.01' min='0'
                        wire:model='instance.sellPrice' required>
                </div>





                {{-- offerPrice --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Offer Price
                        <small class="tag--optional">optional</small>
                    </label>
                    <input class="form-control form--input" type="number" step='0.01' min='0'
                        wire:model='instance.offerPrice'>
                </div>







                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}







                {{-- subtitle --}}
                <div class="col-12" style="margin-top: 60px;">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr>
                        </div>
                        <div class="col-3">
                            <h5>Size / Weight</h5>
                        </div>
                    </div>
                </div>






                {{-- typeOfSize --}}
                <div class="col-12">
                    <div class="filters--radio-wrap mb-5" style="width: 95.5%;">


                        {{-- 1: byName --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="unit-checkbox-1"
                                wire:model.live='instance.weightOption' value='Namefull'>
                            <label class="form-check-label" for="unit-checkbox-1">By Name</label>
                        </div>



                        {{-- 2: fixedSize --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="unit-checkbox-2"
                                wire:model.live='instance.weightOption' value='Fixed'>
                            <label class="form-check-label" for="unit-checkbox-2">Fixed Size / Weight</label>
                        </div>



                        {{-- 3: dynamicSize --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="unit-checkbox-3"
                                wire:model.live='instance.weightOption' value='Dynamic'>
                            <label class="form-check-label" for="unit-checkbox-3">Dynamic Size / Weight</label>
                        </div>
                    </div>
                </div>







                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}






                {{-- sizeWeight - Fixed --}}
                <div class="col-3 mb-4 @if ($instance->weightOption != 'Fixed') d-none @endif">
                    <label class="form-label form--label">Size / Weight</label>
                    <input class="form-control form--input" type="text" wire:model='instance.weight'>
                </div>









                {{-- minSizeWeight - Dynamic --}}
                <div class="col-3 mb-4 @if ($instance->weightOption != 'Dynamic') d-none @endif">
                    <label class="form-label form--label">Min. Size / Weight</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select" data-instance='instance.weight'
                            value='{{ $instance->weight }}'>
                            <option value=""></option>


                            {{-- loop - dynamicSizes --}}
                            @foreach ($dynamicSizes ?? [] as $dynamicSize)
                            <option value="{{ $dynamicSize }}">{{ $dynamicSize }}</option>
                            @endforeach
                            {{-- end loop --}}


                        </select>
                    </div>
                </div>








                {{-- Unit - Both --}}
                <div class="col-3 mb-4
                    @if ($instance->weightOption != 'Dynamic' && $instance->weightOption != 'Fixed') d-none @endif">
                    <label class="form-label form--label">Measuring Unit</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select id='unit-select-1' class="form-select form--select" data-instance='instance.unitId'>
                            <option value=""></option>


                            {{-- loop - units --}}
                            @foreach ($units ?? [] as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                            {{-- end loop --}}


                        </select>
                    </div>
                </div>








                {{-- hr --}}
                <div class="col-12">
                    <hr class="visually-hidden">
                </div>







                {{-- ------------------------------------------- --}}
                {{-- ------------------------------------------- --}}








                {{-- numberOfUnits --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">No. of Units</label>
                    <input class="form-control form--input" type="number" step='0.01' min='0'
                        wire:model='instance.units' wire:change='calculateTotal' wire:loading.attr='readonly'>
                </div>



                {{-- quantityPerUnit --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Quantity / Unit</label>
                    <input class="form-control form--input" step='0.01' min='0' wire:model='instance.quantityPerUnit'
                        wire:change='calculateTotal' wire:loading.attr='readonly'>
                </div>



                {{-- totalQuantity --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Total Quantity</label>
                    <input class="form-control form--input" type="number" readonly="" step='0.01' min='0'
                        wire:model='instance.quantity' required>
                </div>




                {{-- maxQuantityPerOrder --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Max Quantity / Order</label>
                    <input class="form-control form--input" type="number" step='0.01' min='0'
                        wire:model='instance.maxQuantityPerOrder' required>
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}








                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>





                {{-- description --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description
                        <small class="tag--optional">optional</small>
                    </label>
                    <textarea class="form-control form--input form--textarea"
                        wire:model='instance.information'></textarea>
                </div>




                {{-- descirptionAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description
                        <small class="tag--optional">optional</small>
                        <span class="lang--span">العربية</span>
                    </label>
                    <textarea class="form-control form--input form--textarea"
                        wire:model='instance.informationAr'></textarea>
                </div>






                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>









                {{-- mainPicture --}}
                <div class="col-6 mb-4">


                    {{-- subheading --}}
                    <label class="form-label form--label">Main Pictures</label>


                    <label class="img--holder upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                        for="product--file-1" title="Click To Upload">




                        {{-- caption --}}
                        <span class="upload--caption badge">Main Picture</span>




                        {{-- input --}}
                        <input class="form-control d-none file--input" id="product--file-1"
                            data-preview="product--preview-1" type="file" accept="image/*"
                            wire:model='instance.imageFile' />


                        {{-- preview --}}
                        <img class="inventory--image-frame" id="product--preview-1"
                            src="{{ url('assets/img/placeholder.png') }}" wire:ignore />

                    </label>
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- extraPictures --}}
                <div class="col-6 mb-4">

                    {{-- subheading --}}
                    <label class="form-label form--label">Extra Pictures
                        <small class="tag--optional">optional</small>
                    </label>



                    {{-- wrapper --}}
                    <div class="row g-0">





                        {{-- 2: second --}}
                        <div class="col-6 mb-4">
                            <label class="img--holder upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                                for="product--file-2" title="Click To Upload">



                                {{-- caption --}}
                                <span class="upload--caption badge">Second Picture</span>




                                {{-- input --}}
                                <input class="form-control d-none file--input" id="product--file-2"
                                    data-preview="product--preview-2" type="file" accept="image/*"
                                    wire:model='instance.secondImageFile' />


                                {{-- preview --}}
                                <img class="inventory--image-frame" id="product--preview-2"
                                    src="{{ url('assets/img/placeholder.png') }}" wire:ignore />

                            </label>
                        </div>






                        {{-- ----------------------------------------- --}}
                        {{-- ----------------------------------------- --}}







                        {{-- 2: third --}}
                        <div class="col-6 mb-4">
                            <label class="img--holder upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                                for="product--file-3" title="Click To Upload">



                                {{-- caption --}}
                                <span class="upload--caption badge">Third Picture</span>




                                {{-- input --}}
                                <input class="form-control d-none file--input" id="product--file-3"
                                    data-preview="product--preview-3" type="file" accept="image/*"
                                    wire:model='instance.thirdImageFile' />


                                {{-- preview --}}
                                <img class="inventory--image-frame" id="product--preview-3"
                                    src="{{ url('assets/img/placeholder.png') }}" wire:ignore />

                            </label>
                        </div>








                        {{-- ----------------------------------------- --}}
                        {{-- ----------------------------------------- --}}






                        {{-- 3: fourth --}}
                        <div class="col-6">
                            <label class="img--holder upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                                for="product--file-4" title="Click To Upload">



                                {{-- caption --}}
                                <span class="upload--caption badge">Fourth Picture</span>




                                {{-- input --}}
                                <input class="form-control d-none file--input" id="product--file-4"
                                    data-preview="product--preview-4" type="file" accept="image/*"
                                    wire:model='instance.fourthImageFile' />


                                {{-- preview --}}
                                <img class="inventory--image-frame" id="product--preview-4"
                                    src="{{ url('assets/img/placeholder.png') }}" wire:ignore />

                            </label>
                        </div>
                    </div>
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'
                        wire:target='instance.imageFile, instance.secondImageFile, instance.thirdImageFile, instance.fourthImageFile, update'>
                        Update Product</button>
                </div>



            </div>
        </form>
    </section>
    {{-- endForm --}}





















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}









    {{-- selectHandle --}}
    <script>
        $(".form--select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>











    {{-- levelSelectHandle --}}
    <script>
        $(".level--select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         levelType = $(this).attr('data-level');
         levelId = $(this).attr('data-id');


         @this.levelSelect(levelType, selectValue, levelId);


      }); //end function
    </script>







    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}