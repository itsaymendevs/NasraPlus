{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Manage Products</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div" wire:ignore.self
        class="header--div w-100">




        {{-- 1: newButton --}}
        <a class="btn btn--outline-theme btn--header scalemix--3 px-4" role="button" href="new-product.html"><svg
                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                class="bi bi-plus-lg me-2">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z">
                </path>
            </svg>New Product
        </a>




        {{-- title --}}
        <h3 class="mb-0">Products</h3>






        {{-- 2: profile --}}
        <button class="btn btn--theme btn--header scale--3 px-4" type="button">
            Profile<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                viewBox="0 0 16 16" class="bi bi-arrow-up-right ms-2">
                <path fill-rule="evenodd"
                    d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z">
                </path>
            </svg>
        </button>



    </section>






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
                    <a class="btn btn--export scale--3 px-4" role="button" href="#">
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
                    <a class="btn btn--export scale--3 px-4 ms-2" role="button" href="#">
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
                    <a class="btn btn--export active scale--3 px-4" role="button" href="edit-products.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
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



            {{-- byGeneralType --}}
            <div class="filters--radio-wrap">
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">By General Types</label>
                </div>
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-3" />
                    <label class="form-check-label" for="formCheck-3">By Product Types</label>
                </div>
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-2" />
                    <label class="form-check-label" for="formCheck-2">By Company Name</label>
                </div>
            </div>






            {{-- row --}}
            <div class="row align-items-end">


                {{-- category --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- subCategory --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Sub Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>



                {{-- type --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>








                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Product" />
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
                    <h3 class="text-end row--counter">80</h3>
                </div>
            </div>
        </div>
        {{-- endFilters --}}











        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}






        {{-- resultRow --}}
        <div id="results--row">



            {{-- headers --}}
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




            {{-- -------------------------- --}}
            {{-- -------------------------- --}}





            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">P-10503</label>
                </div>


                {{-- 1.2: name --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label me-1">Quina Rice Saria</label>
                </div>


                {{-- 1.3: sizeOrWeight --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">500 G</label>
                </div>



                {{-- 1.4: sellPrice - buyPrice --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">130 / -</label>
                </div>




                {{-- 1.5: quantity --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">1300</label>
                </div>


                {{-- 1.6: favorites --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">3</label>
                </div>





                {{-- :: actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>



                        {{-- buttons --}}
                        <div class="dropdown-menu results--dropdown-menu">
                            <a class="dropdown-item" href="#">Edit Product</a>
                            <a class="dropdown-item" href="#">Hide Product</a>
                            <a class="dropdown-item" href="#">Remove From Home</a>
                        </div>
                        {{-- endButtons --}}


                    </div>
                </div>
            </div>
            {{-- end loop --}}





        </div>
        {{-- endResultRow --}}



    </section>




</div>
{{-- endCol --}}