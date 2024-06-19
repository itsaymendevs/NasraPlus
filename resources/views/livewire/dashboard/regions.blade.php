{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Delivery Regions</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='New Region'
            leftLink="{{ route('dashboard.createRegion') }}" title='Delivery Regions' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}












    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- 1: toggleWrap --}}
        <div id="disable--wrap" class="mb-5">
            <div class="row align-items-end">
                <div class="col-12">
                    <div class="form-check form-switch form--switch xl">
                        <input class="form-check-input" type="checkbox" id="isDeliveryActive-checkbox-1"
                            wire:model.live='isDeliveryActive' wire:change='toggleDelivery' />
                        <label class="form-check-label" for="isDeliveryActive-checkbox-1">Enable Delivery for
                            Regions</label>
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
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchState' data-clear='true'>
                            <option value=""></option>


                            {{-- loop - groupByCountry --}}
                            @foreach ($states->groupBy('countryId') ?? [] as $commonCountry =>
                            $statesByCountry)

                            <optgroup label="{{ $statesByCountry->first()->country->name }}">


                                {{-- loop - states --}}
                                @foreach ($statesByCountry as $state)

                                <option value="{{ $state->id }}">{{ $state->name }}</option>

                                @endforeach
                                {{-- end loop --}}


                            </optgroup>


                            @endforeach
                            {{-- end loop - groupByCountry --}}


                        </select>
                    </div>
                </div>







                {{-- -------------------------------- --}}
                {{-- -------------------------------- --}}






                {{-- 2: status --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Status</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchStatus' data-clear='true'>
                            <option value=""></option>
                            <option value="true">Active</option>
                            <option value="false">Inactive</option>
                        </select>
                    </div>
                </div>






                {{-- empty --}}
                <div class="col-4 mb-4"></div>






                {{-- 3: search --}}
                <div class="col-4">
                    <input type="search" class="form--input" placeholder="Search by Region"
                        wire:model.live='searchRegion' />
                </div>





                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">{{ $regions->total() ?? 0 }}</h3>
                </div>



            </div>
        </div>
        {{-- endFilters --}}











        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}








        {{-- resultsRow --}}
        <div id="results--row">



            {{-- 1: headers --}}
            @if ($regions->total() > 0)


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

            @endif
            {{-- end if --}}






            {{-- ----------------------------- --}}
            {{-- ----------------------------- --}}








            {{-- loop - regions --}}
            @foreach ($regions ?? [] as $region)

            <div class="row g-0 align-items-center results--item" key='single-region-{{ $region->id }}'>



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">DA-{{ $globalSNCounter++ }}</label>
                </div>




                {{-- 1.2: name --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $region->state->name }} - {{ $region->name
                        }}</label>
                </div>


                {{-- nameAr --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $region->state->nameAr }} - {{
                        $region->nameAr
                        }}</label>
                </div>






                {{-- 1.3: users --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $region?->users?->count() ?? 0 }}</label>
                </div>




                {{-- 1.4: deliveryPrice --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">{{ number_format($region->price) }}</label>
                </div>







                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>


                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit --}}
                            <a class="dropdown-item" href="{{ route('dashboard.editRegion', [$region->id]) }}">Edit</a>



                            {{-- 2: toggle --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleActive({{ $region->id }})'>
                                @if ($region->isActive) Disable @else Enable @endif
                            </a>

                        </div>
                    </div>
                </div>
                {{-- endActions --}}



            </div>

            @endforeach
            {{-- end loop --}}







            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}






            {{-- paginations --}}
            <div class="row">
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $regions?->links() }}</div>
            </div>





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











    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







</div>
{{-- endCol --}}