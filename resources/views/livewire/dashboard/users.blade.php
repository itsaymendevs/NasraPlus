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



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
            leftLink="{{ route('dashboard.orders') }}" title='Customers' />


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



                {{-- col --}}
                <div class="col-12 text-end">



                    {{-- 1: exportExcel --}}
                    <a class="btn btn--export scale--3 px-4" role="button" href="javascript:void(0);"
                        wire:loading.class='disabled'>
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
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--one" data-level='country'
                            data-instance='searchCountry' data-clear='true'>
                            <option value=""></option>

                            @foreach ($countries ?? [] as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>








                {{-- 2: state --}}
                <div class="col-4 mb-4 @if ($searchCountry != '1') d-none @endif">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--two" data-level='state'
                            data-instance='searchState' data-clear='true'>
                        </select>
                    </div>
                </div>









                {{-- 3: region --}}
                <div class="col-4 mb-4 @if ($searchCountry != '1') d-none @endif">
                    <label class="form-label form--label">Region</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--three" data-level='region'
                            data-instance='searchRegion' data-clear='true'>
                        </select>
                    </div>
                </div>







                {{-- empty --}}
                <div class="col-12"></div>






                {{-- ------------------------ --}}
                {{-- ------------------------ --}}






                {{-- search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by User"
                        wire:model.live='searchUser' />
                </div>






                {{-- empty --}}
                <div class="col-4"></div>



                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">{{ $users->total() ?? 0 }}</h3>
                </div>
            </div>
        </div>
        {{-- endFilters --}}











        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}






        {{-- resultsRow --}}
        <div id="results--row">




            {{-- headers --}}
            @if ($users->total() > 0)

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


            @endif
            {{-- endHeaders --}}








            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}








            {{-- loop - users --}}
            @foreach ($users ?? [] as $user)

            <div class="row g-0 align-items-center results--item" key='single-user-{{ $user->id }}'>


                {{-- 1: name --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $user->fullName() }}</label>
                </div>


                {{-- phone --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $user->phone }}</label>
                </div>


                {{-- completedOrders --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $user?->completedOrders()?->count() ?? 0
                        }}</label>
                </div>



                {{-- canceledOrders --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $user?->canceledOrders()?->count() ?? 0
                        }}</label>
                </div>


                {{-- favorites --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $user?->favorites()?->count() ?? 0
                        }}</label>
                </div>






                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: previousOrders --}}
                            <a class="dropdown-item" href="{{ route('dashboard.userProfile', [$user->id]) }}">
                                Profile
                            </a>


                            {{-- 2: toggleActive --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleActive({{ $user->id }})'>
                                @if ($user->isActive) Disable @else Enable @endif
                            </a>
                        </div>
                    </div>
                </div>
                {{-- endActions --}}



            </div>

            @endforeach
            {{-- end loop --}}





        </div>
    </section>
    {{-- endSection --}}
















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- selectHandle --}}
    <script>
        $(".form--select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


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










</div>
{{-- endCol --}}