{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Categories</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='toggle' leftTitle='New Category'
            leftLink="#categories-create" title='Categories' />


    </section>
    {{-- endHeader --}}










    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}












    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- 1: filters --}}
        <div id="filters--wrap" class="mb-5">
            <div class="row align-items-center">


                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Category"
                        wire:model.live='searchCategory' />
                </div>




                {{-- sort --}}
                <div class="col-4">
                    <a class="btn btn--theme btn--sort scalemix--3 px-4" role="button" data-bs-toggle="tooltip"
                        data-bss-tooltip="" data-bs-placement="right" title="Sort Main-Categories"
                        href="main-categories-sort.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                            height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-down-up">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z">
                            </path>
                        </svg>
                    </a>
                </div>






                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">{{ $categories->total() }}</h3>
                </div>
            </div>
        </div>
        {{-- endFilters --}}









        {{-- ------------------------------------------- --}}
        {{-- ------------------------------------------- --}}








        {{-- resultRow --}}
        <div id="results--row">


            {{-- headers --}}

            @if ($categories->total() > 0)

            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Name Ar</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>

            @endif
            {{-- end if --}}









            {{-- --------------------- --}}
            {{-- --------------------- --}}




            {{-- content --}}



            {{-- loop - categories --}}
            @foreach ($categories ?? [] as $category)

            <div class="row g-0 align-items-center results--item" key='single-category-{{ $category->id }}'>


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">MC-{{ $globalSNCounter++ }}</label>
                </div>



                {{-- 2: name --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $category->name }}</label>
                </div>



                {{-- 2.5: nameAr --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">{{ $category->nameAr }}</label>
                </div>






                {{-- actions --}}
                <div class="col-1">



                    {{-- 1: editModal --}}
                    <button class="btn btn--raw-icon edit scale--3" type="button" data-bs-target="#categories-edit"
                        data-bs-toggle="modal" wire:click='edit({{ $category->id }})'>
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
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $categories?->links() }}</div>
            </div>




        </div>
        {{-- endResults --}}















        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}






        {{-- categoryPicturesForm --}}
        <form wire:submit='updateCover' wire:loading.class='disabled' class="row">




            {{-- subtitles --}}
            <div class="col-12" style="margin-top: 65px">
                <div class="row hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Cateogry picture</h5>
                    </div>
                </div>
            </div>






            {{-- ----------------------------------------- --}}
            {{-- ----------------------------------------- --}}







            {{-- 1: picture --}}
            <div class="col-6 mb-4">
                <label class="img--holder for-category upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                    for="cover--file-1" title="Click To Upload">




                    {{-- caption --}}
                    <span class="upload--caption badge">English Picture</span>




                    {{-- input --}}
                    <input class="form-control d-none file--input" id="cover--file-1" data-preview="cover--preview-1"
                        type="file" wire:model='instance.imageFile' />


                    {{-- preview --}}
                    <img class="inventory--image-frame" id="cover--preview-1"
                        src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                </label>
            </div>








            {{-- 2: pictureAr --}}
            <div class="col-6 mb-4">
                <label class="img--holder for-category upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                    for="cover--file-2" title="Click To Upload">




                    {{-- caption --}}
                    <span class="upload--caption badge">Arabic Picture</span>




                    {{-- input --}}
                    <input class="form-control d-none file--input" id="cover--file-2" data-preview="cover--preview-2"
                        type="file" wire:model='instance.imageFileAr' />


                    {{-- preview --}}
                    <img class="inventory--image-frame" id="cover--preview-2"
                        src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                </label>
            </div>









            {{-- -------------------------------------- --}}
            {{-- -------------------------------------- --}}








            {{-- submiButton --}}
            <div class="col-12 text-center mb-5 mt-2">
                <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'
                    wire:target='instance.imageFile, instance.imageFileAr'>
                    Save Changes
                </button>
            </div>

        </form>






    </section>
    {{-- endSection --}}













    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: create --}}
    <livewire:dashboard.products.group.categories.components.categories-create key='category-create' />


    {{-- 2: edit --}}
    <livewire:dashboard.products.group.categories.components.categories-edit key='category-edit' />



    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}





</div>
{{-- endCol --}}