{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Delivery Areas</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='New Area'
            leftLink="{{ route('dashboard.createArea') }}" title='Delivery Areas' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}












    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- 1: toggleWrap --}}
        <div id="disable--wrap" class="mb-5">
            <div class="row align-items-end">
                <div class="col-12">
                    <div class="form-check form-switch form--switch xl">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" />
                        <label class="form-check-label" for="formCheck-1">Stop delivering for areas</label>
                    </div>
                </div>
            </div>
        </div>






        {{-- --------------------------------------------- --}}
        {{-- --------------------------------------------- --}}






        {{-- filtersRow --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row align-items-end">



                {{-- 1: state --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- 2: status --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Status</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- empty --}}
                <div class="col-4 mb-4"></div>




                {{-- 3: search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Area" />
                </div>





                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">2</h3>
                </div>
            </div>
        </div>
        {{-- endFilters --}}











        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}








        {{-- resultsRow --}}
        <div id="results--row">



            {{-- 1: headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name Ar</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Users</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label">Price</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>









            {{-- ----------------------------- --}}
            {{-- ----------------------------- --}}








            {{-- 2: rows --}}
            <div class="row g-0 align-items-center results--item">



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">DA-001</label>
                </div>




                {{-- 1.2: name --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Khartoum - Mashtal</label>
                </div>


                {{-- nameAr --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">الخرطوم - المشتل</label>
                </div>






                {{-- 1.3: users --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">35</label>
                </div>




                {{-- 1.4: deliveryPrice --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">250</label>
                </div>







                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>


                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit - disable --}}
                            <a class="dropdown-item" href="#">Edit Area</a>
                            <a class="dropdown-item" href="#">Disable Area</a>

                        </div>
                    </div>
                </div>

            </div>
            {{-- endRow --}}



        </div>
    </section>
    {{-- endSection --}}








</div>
{{-- endCol --}}