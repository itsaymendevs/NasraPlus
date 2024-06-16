{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Companies</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='toggle' leftTitle='New Company'
            leftLink="#companies-create" title='Companies' />


    </section>
    {{-- endHeader --}}










    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- 1: filtersRow --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row g-0 align-items-end">



                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Company">
                </div>



                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">80</h3>
                </div>
            </div>
        </div>
        {{-- endFiltersRow --}}








        {{-- ----------------------------------------- --}}
        {{-- ----------------------------------------- --}}








        {{-- resultsRow --}}
        <div id="results--row">



            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Name Ar</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Products</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>




            {{-- ------------------------ --}}
            {{-- ------------------------ --}}






            {{-- content --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">C-001</label>
                </div>


                {{-- 1.2: name --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Juhaina Ltd</label>
                </div>



                {{-- 1.3: nameAr --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">شركة جهينة</label>
                </div>



                {{-- 1.4: products --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">18</label>
                </div>






                {{-- 1.5: edit --}}
                <div class="col-1">
                    <button class="btn btn--raw-icon edit scale--3" type="button" data-bs-target="#companies-edit"
                        data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                            </path>
                        </svg>
                    </button>
                </div>


            </div>
            {{-- endContent --}}


        </div>
    </section>
    {{-- endSection --}}


















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: create --}}
    <livewire:dashboard.products.group.companies.components.companies-create />


    {{-- 2: edit --}}
    <livewire:dashboard.products.group.companies.components.companies-edit />



    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}