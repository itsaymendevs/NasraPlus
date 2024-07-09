{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Units</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='toggle' leftTitle='New Unit' leftLink="#units-create"
            title='Units' />


    </section>
    {{-- endHeader --}}









    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}









    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- filtersRow --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row align-items-end">


                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Unit"
                        wire:model.live='searchUnit' />
                </div>





                {{-- counter --}}
                <div class="col-8 d-flex align-items-end justify-content-end">


                    {{-- 1: counter --}}
                    <h3 class="text-end row--counter">{{ $units->total() ?? 0 }}</h3>




                    {{-- 2: exportExcel --}}
                    <a class="btn btn--export scale--3 px-4 ms-4" role="button" href="javascript:void(0);"
                        wire:click="export('en')" wire:loading.class='disabled'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-box-arrow-up-left me-2">
                            <path fill-rule="evenodd"
                                d="M7.364 3.5a.5.5 0 0 1 .5-.5H14.5A1.5 1.5 0 0 1 16 4.5v10a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 3 14.5V7.864a.5.5 0 1 1 1 0V14.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-.5-.5H7.864a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 0 1H1.707l8.147 8.146a.5.5 0 0 1-.708.708L1 1.707V5.5a.5.5 0 0 1-1 0v-5z">
                            </path>
                        </svg>Export
                    </a>



                </div>
            </div>
        </div>
        {{-- endFiltersRow --}}







        {{-- ------------------------------------ --}}
        {{-- ------------------------------------ --}}







        {{-- resultsRow --}}
        <div id="results--row">





            {{-- headers --}}
            @if ($units->total() > 0)


            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Abbr</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Name Ar</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Abbr</label>
                </div>



                <div class="col-1">
                    <label class="col-form-label form--label row--label">ID</label>
                </div>



                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>



            @endif
            {{-- end if --}}




            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}






            {{-- loop - units --}}
            @foreach ($units ?? [] as $unit)

            <div class="row g-0 align-items-center results--item" key='single-unit-{{ $unit->id }}'>


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">U-{{ $globalSNCounter++ }}</label>
                </div>



                {{-- 2: name --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $unit->name }}</label>
                </div>



                {{-- 2.1: abbereviation--}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $unit->abbreviation }}</label>
                </div>




                {{-- 3: nameAr --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $unit->nameAr }}</label>
                </div>



                {{-- 3.2: abbreviation --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $unit->abbreviationAr }}</label>
                </div>




                {{-- 4: ID --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">{{ $unit->id }}</label>
                </div>



                {{-- edit --}}
                <div class="col-1">
                    <button class="btn btn--raw-icon edit scale--3" type="button" data-bs-target="#units-edit"
                        data-bs-toggle="modal" wire:click='edit({{ $unit->id }})'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-pencil-square">
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

            @endforeach
            {{-- end loop --}}








            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}






            {{-- paginations --}}
            <div class="row">
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $units?->links() }}</div>
            </div>





        </div>
    </section>
    {{-- endSection --}}






















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: create --}}
    <livewire:dashboard.products.group.units.components.units-create key='units-create' />


    {{-- 2: edit --}}
    <livewire:dashboard.products.group.units.components.units-edit key='units-edit' />



    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}














</div>
{{-- endCol --}}