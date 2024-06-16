{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Customers</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Customers' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">




        {{-- exportWrap --}}
        <div id="export--wrap" class="mb-5">
            <div class="row g-0 align-items-end">



                {{-- col --}}
                <div class="col-12 text-start">



                    {{-- 1: export --}}
                    <a class="btn btn--export scale--3 px-4" role="button" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-box-arrow-up-left me-2">
                            <path fill-rule="evenodd"
                                d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z">
                            </path>
                        </svg>Excel
                    </a>





                    {{-- 2: exportAr --}}
                    <a class="btn btn--export scale--3 px-4 ms-2" role="button" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-box-arrow-up-left me-2">
                            <path fill-rule="evenodd"
                                d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z">
                            </path>
                        </svg>Excel Ar
                    </a>
                </div>
                {{-- endCol --}}




            </div>
        </div>
        {{-- endRow --}}







        {{-- ---------------------------------------- --}}
        {{-- ---------------------------------------- --}}







        {{-- filtersRow --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row align-items-end">



                {{-- 1: country --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Country</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- 2: state --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- 3: province --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">County</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- ------------------------ --}}
                {{-- ------------------------ --}}






                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by User" />
                </div>




                {{-- empty --}}
                <div class="col-4"></div>



                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">12</h3>
                </div>
            </div>
        </div>
        {{-- endFilters --}}











        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}






        {{-- resultsRow --}}
        <div id="results--row">




            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Phone</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Completed</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Canceled</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Favorites</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>
            {{-- endHeaders --}}






            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}






            {{-- contentRows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: name --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Yasir Ahmed</label>
                </div>


                {{-- phone --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">66 503421</label>
                </div>


                {{-- completedOrders --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">10</label>
                </div>



                {{-- canceledOrders --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">1</label>
                </div>


                {{-- favorites --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">0</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: previousOrders --}}
                            <a class="dropdown-item" href="user.html">Previous Orders</a>


                            {{-- 2: toggleActive --}}
                            <a class="dropdown-item" href="#">Deactivate Account</a>
                        </div>
                    </div>
                </div>
                {{-- endActions --}}



            </div>
            {{-- endRow --}}





        </div>
    </section>
    {{-- endSection --}}








</div>
{{-- endCol --}}