{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Manage Products</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='New Product'
            leftLink="{{ route('dashboard.createProduct') }}" title='Products' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>




        {{-- exportWrap --}}
        <div id="export--wrap" class="mb-5">
            <div class="row g-0 align-items-end">



                {{-- leftCol --}}
                <div class="col-6 text-start">



                    {{-- 1: exportExcel --}}
                    <a class="btn btn--export scale--3 px-4" role="button" href="javascript:void(0);"
                        wire:click="export('en')" wire:loading.class='disabled'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-box-arrow-up-left me-2">
                            <path fill-rule="evenodd"
                                d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z">
                            </path>
                        </svg>Excel
                    </a>





                    {{-- exportExcelArabic --}}
                    <a class="btn btn--export scale--3 px-4 ms-2 d-none" role="button" href="javascript:void(0);"
                        wire:click="export('ar')" wire:loading.class='disabled'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-box-arrow-up-left me-2">
                            <path fill-rule="evenodd"
                                d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z">
                            </path>
                        </svg>Excel AR
                    </a>


                </div>
                {{-- end leftCol --}}









                {{-- ----------------------------------- --}}
                {{-- ----------------------------------- --}}





                {{-- rightCol --}}
                <div class="col-6 text-end">
                    <a class="btn btn--export active scale--3 px-4" role="button"
                        href="{{ route('dashboard.manageProducts') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-pencil-square me-2">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                            </path>
                        </svg>Edit Products
                    </a>
                </div>


            </div>
        </div>
        {{-- endWrap --}}






        {{-- --------------------------------------------- --}}
        {{-- --------------------------------------------- --}}







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
                    <input class="form-check-input" type="radio" id="type-checkbox-2" value='byProductTypes'
                        wire:model.live='searchGroup' wire:change='switchFilterGroup' />
                    <label class="form-check-label" for="type-checkbox-2">By Product Types</label>
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
                        <select class="form--select level--select level--one" data-level='category'
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
                        <select class="form--select level--select level--two" data-level='subCategory'
                            data-instance='searchSubCategory' data-clear='true'>
                        </select>
                    </div>
                </div>







                {{-- type --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--three" data-level='type'
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







                {{-- :: sortProducts --}}
                <div class="col-4">
                    <button class="btn btn--theme btn--sort scalemix--3 px-4 rounded-1" data-bs-toggle="modal"
                        data-bss-tooltip="" data-bs-placement="right" type="button" title="Sort Products"
                        data-bs-target="#sort-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-arrow-down-up">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z">
                            </path>
                        </svg>
                    </button>
                </div>







                {{-- counter --}}
                <div class="col-4 text-end">
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

            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Size/ M. Weight</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Sell / Offer Price</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Quantity</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label">Favs</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>


            @endif
            {{-- end if --}}






            {{-- -------------------------- --}}
            {{-- -------------------------- --}}









            {{-- loop - products --}}
            @foreach ($products ?? [] as $product)

            <div class="row g-0 align-items-center results--item" key='single-product-{{ $product->id }}'>


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">P-{{ $globalSNCounter++ }}</label>
                </div>


                {{-- 1.2: name --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label me-1">{{ $product?->name }}</label>
                </div>


                {{-- 1.3: sizeOrWeight --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $product->weight ?? 1 }} {{
                        $product?->unit?->name }}</label>
                </div>



                {{-- 1.4: sellPrice - buyPrice --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $product->sellPrice ?? '-' }} / {{
                        $product->buyPrice ?? '-' }}</label>
                </div>




                {{-- 1.5: quantity --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $product->quantity }}</label>
                </div>


                {{-- 1.6: favorites --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">{{ $product?->favorites?->count() ?? 0
                        }}</label>
                </div>





                {{-- :: actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>



                        {{-- buttons --}}
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: edit --}}
                            <a class="dropdown-item" href="{{ route('dashboard.editProduct', [$product->id]) }}">Edit
                                Product</a>



                            {{-- 2: toggleActive --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleHidden({{ $product->id }})'>
                                @if ($product->isHidden) Show Product @else Hide Product @endif
                            </a>



                            {{-- 3: toggleMainPage --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleMainPage({{ $product->id }})'>
                                @if ($product->isMainPage) Remove From Home @else Show on Home @endif
                            </a>
                        </div>
                        {{-- endButtons --}}


                    </div>
                </div>
            </div>

            @endforeach
            {{-- end loop --}}








            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}






            {{-- paginations --}}
            <div class="row">
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $products?->links() }}</div>
            </div>







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


         @this.levelSelect(levelType, selectValue);


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