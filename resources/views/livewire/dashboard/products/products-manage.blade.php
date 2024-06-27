{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Edit Products</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>


        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.products') }}" title='Edit Products' />

    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>





        {{-- filtersWrap --}}
        <div id="filters--wrap" class="mb-5">



            {{-- groupFilter --}}
            <div class="filters--radio-wrap">
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="type-checkbox-1" value='byGeneralTypes'
                        wire:model.live='searchGroup' wire:change='switchFilterGroup' />
                    <label class="form-check-label" for="type-checkbox-1">By General Types</label>
                </div>
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="type-checkbox-2" value='byClassification'
                        wire:model.live='searchGroup' wire:change='switchFilterGroup' />
                    <label class="form-check-label" for="type-checkbox-2">By Classification</label>
                </div>
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="type-checkbox-3" value='byCompanies'
                        wire:model.live='searchGroup' wire:change='switchFilterGroup' />
                    <label class="form-check-label" for="type-checkbox-3">By Company Name</label>
                </div>
            </div>






            {{-- row --}}
            <div class="row align-items-end">



                {{-- 1: group --}}
                @if ($searchGroup == 'byGeneralTypes')




                {{-- category --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--one" data-level='category' data-id='1'
                            data-instance='searchCategory' data-clear='true'>
                            <option value=""></option>


                            {{-- loop - categories --}}
                            @foreach ($categories ?? [] as $category)

                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                            @endforeach
                            {{-- end loop --}}

                        </select>
                    </div>
                </div>










                {{-- subCategory --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Sub Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--two" data-level='subCategory' data-id='1'
                            data-instance='searchSubCategory' data-clear='true'>
                        </select>
                    </div>
                </div>









                {{-- type --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--three" data-level='type' data-id='1'
                            data-instance='searchType' data-clear='true'>
                        </select>
                    </div>
                </div>


                @endif
                {{-- end if - generalTypes --}}














                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}








                {{-- 2: group --}}
                @if ($searchGroup == 'byClassification')



                {{-- company --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Classification</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchClassification' data-clear='true'>
                            <option value=""></option>

                            <option value="Home Products">Home Products</option>
                            <option value="Hidden Products">Hidden Products</option>
                            <option value="Quantity Shortage">Quantity Shortage</option>
                            <option value="Offers & Discounts">Offers & Discounts</option>

                        </select>
                    </div>
                </div>






                {{-- empty --}}
                <div class="col-12"></div>




                @endif
                {{-- end if --}}











                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}








                {{-- 3: group --}}
                @if ($searchGroup == 'byCompanies')



                {{-- company --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Company</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchCompany' data-clear='true'>
                            <option value=""></option>

                            {{-- loop - companies --}}
                            @foreach ($companies ?? [] as $company)

                            <option value="{{ $company->id }}">{{ $company->name }}</option>

                            @endforeach
                            {{-- end loop --}}

                        </select>
                    </div>
                </div>






                {{-- empty --}}
                <div class="col-12"></div>




                @endif
                {{-- end if --}}












                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}









                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Product"
                        wire:model.live='searchProduct' />
                </div>





                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">{{ $products->total() ?? 0 }}</h3>
                </div>

            </div>
        </div>
        {{-- endFilters --}}











        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}






        {{-- resultRow --}}
        <div id="results--row">




            {{-- headers --}}
            @if ($products->total() > 0)


            <div class="row align-items-center results--header mb-2 mx-0" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Selling Price</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Offer Price</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Quantity</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>
            {{-- endHeaders --}}




            @endif
            {{-- end if --}}












            {{-- ---------------------------------------------- --}}
            {{-- ---------------------------------------------- --}}




            {{-- loop - products --}}
            @foreach ($products ?? [] as $key => $product)


            <livewire:dashboard.products.products-manage.components.products-manage-view
                key='single-product-{{ $product->id }}' id='{{ $product->id }}' counter='{{ $key }}' />


            @endforeach
            {{-- end loop --}}



        </div>
        {{-- endResultRow --}}



    </section>
    {{-- endSection --}}




















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}









    {{-- selectHandle --}}
    <script>
        $(document).on('change', ".form--select", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);
         @this.rerender();


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









    {{-- modals --}}
    @section('modals')








    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}











</div>
{{-- endCol --}}