{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Sub-Categories</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='toggle' leftTitle='New Category'
            leftLink="#subCategories-create" title='Sub-Categories' />


    </section>
    {{-- endHeader --}}










    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}









    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>




        {{-- 1: filters --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row align-items-end">



                {{-- category --}}
                <div class="col-4">
                    <label class="form-label form--label">Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select form--subCategory-select" data-instance='searchCategory'
                            data-clear='true'>
                            <option value=""></option>

                            @foreach ($categories ?? [] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>






                {{-- sort --}}
                <div class="col-4 mb-1">
                    <a class="btn btn--theme btn--sort scalemix--3 px-4 rounded-1" role="button" data-bs-toggle="modal"
                        data-bss-tooltip="" data-bs-placement="right" title="Sort Sub-Categories"
                        data-bs-target="#sort-modal" href='javascript:void(0);'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-arrow-down-up">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z">
                            </path>
                        </svg>
                    </a>
                </div>







                {{-- counter --}}
                <div class="col-4 text-end mb-1">
                    <h3 class="text-end row--counter">{{ $subCategories->total() }}</h3>
                </div>


            </div>
        </div>
        {{-- endFilters --}}












        {{-- --------------------------------------------------- --}}
        {{-- --------------------------------------------------- --}}










        {{-- resultsRow --}}
        <div id="results--row">


            {{-- headers --}}

            @if ($subCategories->total() > 0)

            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Category</label>
                </div>
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>


            @endif
            {{-- endHeaders --}}







            {{-- ----------------------------- --}}
            {{-- ----------------------------- --}}








            {{-- loop - subCategories --}}
            @foreach ($subCategories ?? [] as $subCategory)


            <div class="row g-0 align-items-center results--item" key='single-subCategory-{{ $subCategory->id }}'>



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">SC-{{ $globalSNCounter++ }}</label>
                </div>



                {{-- 2: category --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $subCategory->category->name }}</label>
                </div>



                {{-- 3: name --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">{{ $subCategory->name }}</label>
                </div>






                {{-- actions --}}
                <div class="col-1">



                    {{-- 1: edit --}}
                    <button class="btn btn--raw-icon edit scale--3" type="button" data-bs-target="#subCategories-edit"
                        wire:click='edit({{ $subCategory->id }})' data-bs-toggle="modal"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
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
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $subCategories?->links() }}</div>
            </div>





        </div>
    </section>
    {{-- endSection --}}




















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- selectHandle --}}
    <script>
        $(".form--subCategory-select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>










    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- modals --}}
    @section('modals')




    {{-- 1: create --}}
    <livewire:dashboard.products.group.sub-categories.components.sub-categories-create key='subCategories-create' />


    {{-- 2: edit --}}
    <livewire:dashboard.products.group.sub-categories.components.sub-categories-edit key='subCategories-edit' />



    {{-- 3: sort --}}
    <livewire:dashboard.products.group.sub-categories.components.sub-categories-prepare-sort key='subCategories-sort' />





    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}