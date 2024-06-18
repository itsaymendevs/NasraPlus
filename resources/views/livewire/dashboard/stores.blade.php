{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Pickup Stores</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='New Store'
            leftLink="{{ route('dashboard.createStore') }}" title='Pickup Stores' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>




        {{-- toggleWrapper --}}
        <div id="disable--wrap" class="mb-5">
            <div class="row g-0 align-items-center">



                {{-- isPickupActive --}}
                <div class="col-8">
                    <div class="form-check form-switch form--switch xl">
                        <input class="form-check-input" type="checkbox" id="isPickupActive-checkbox-1"
                            wire:model.live='isPickupActive' wire:change='togglePickup' />
                        <label class="form-check-label" for="isPickupActive-checkbox-1">Enable Receiving for
                            Stores</label>
                    </div>
                </div>





                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">
                        {{ $stores->total() }}
                    </h3>
                </div>
            </div>
        </div>
        {{-- endToggler --}}









        {{-- ----------------------------------------------- --}}
        {{-- ----------------------------------------------- --}}









        {{-- resultsRow --}}
        <div id="results--row">



            {{-- headers --}}
            @if ($stores->total() > 0)

            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Location</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>

            @endif
            {{-- endHeaders --}}







            {{-- ------------------------------------------- --}}
            {{-- ------------------------------------------- --}}







            {{-- loop - stores --}}
            @foreach ($stores ?? [] as $store)

            <div class="row g-0 align-items-center results--item">



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">S-{{ $globalSNCounter++ }}</label>
                </div>



                {{-- 1.2: name --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $store->title }}</label>
                </div>



                {{-- 1.3: information --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">{{ $store->information }}</label>
                </div>





                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: edit --}}
                            <a class="dropdown-item" href="{{ route('dashboard.editStore', [$store->id]) }}">Edit</a>




                            {{-- 2: toggleDisable --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleActive({{ $store->id }})'>
                                @if ($store->isActive) Disable @else Enable @endif
                            </a>


                        </div>
                    </div>
                </div>
            </div>


            @endforeach
            {{-- end loop --}}








        </div>
    </section>
    {{-- endSection --}}








</div>
{{-- endCol --}}