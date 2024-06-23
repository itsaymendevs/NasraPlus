{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Sort Sub-Categories</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>


        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.subCategories') }}" title='Sort Sub-Categories' />


    </section>
    {{-- endHeader --}}










    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}












    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>




        {{-- submitButton --}}
        <div class="text-center d-block mb-4">
            <button id='sort--button' class="btn btn--theme btn--submit btn--sm rounded-1"
                wire:loading.class='disabled'>
                Save arrangement
            </button>
        </div>







        {{-- resultRow --}}
        <div id="results--row" wire:ignore>




            {{-- loop - subCategories --}}
            @foreach ($subCategories ?? [] as $subCategory)


            <div class="row g-0 align-items-center results--item sort--item"
                key='single-subCategory-{{ $subCategory->id }}'>




                {{-- subCategory --}}
                <input type="hidden" class='sort--list' value='{{ $subCategory->id }}'>







                {{-- serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">SC-{{ $globalSNCounter++ }}</label>
                </div>


                {{-- name --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $subCategory->name }}</label>
                </div>




                {{-- nameAr --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">{{ $subCategory->nameAr }}</label>
                </div>





                {{-- actions --}}
                <div class="col-1">
                    <button class="btn btn--raw-icon edit scale--3 handle" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-arrows-move">
                            <path fill-rule="evenodd"
                                d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10zM.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8z">
                            </path>
                        </svg>
                    </button>
                </div>



            </div>

            @endforeach
            {{-- end loop --}}




        </div>
        {{-- endResults --}}






    </section>
    {{-- endSection --}}






















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}






    {{-- handleSort --}}
    <script>
        $(document).on('click', '#sort--button', function() {



            // 1: updateList
            list = [];

            $('.sort--list').each(function() {
                list.push($(this).val());
            });


            @this.update(list);

        });
    </script>










    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}










</div>
{{-- endCol --}}