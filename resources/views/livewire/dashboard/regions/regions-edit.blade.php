{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Edit Region</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.regions') }}" title='Edit Region' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>


        <form wire:submit='update' wire:loading.class='disabled' class="form--page mb-5">
            <div class="row">



                {{-- 1: name --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.name' />
                </div>




                {{-- 1.2: nameAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input" type="text" required wire:model='instance.nameAr' />
                </div>







                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}





                {{-- 2: state --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select" data-instance='instance.stateId'
                            value='{{ $instance?->stateId ?? null }}'>
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









                {{-- 4: estimatedTime --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Estimated Time for Delivery</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select" data-instance='instance.deliveryTimeId'
                            value='{{ $instance?->deliveryTimeId ?? null }}'>
                            <option value=""></option>

                            @foreach ($deliveryTimes ?? [] as $deliveryTime)
                            <option value="{{ $deliveryTime->id }}">{{ $deliveryTime->title }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>









                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}






                {{-- 5: deliveryPrice --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Delivery Price</label>
                    <input class="form-control form--input" type="number" step='0.01' required min='0'
                        wire:model='instance.price' />
                </div>






                {{-- 6: isActive --}}
                <div class="col-6 align-self-end mb-4 pb-3">
                    <div class="form-check form--checkbox d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="isActive-checkbox-1"
                            wire:model='instance.isActive' />
                        <label class="form-check-label" for="isActive-checkbox-1">Enable Delivery for Region</label>
                    </div>
                </div>










                {{-- submitButton --}}
                <div class="col-12 text-center mt-4">
                    <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>
                        Update item
                    </button>
                </div>

            </div>
            {{-- endRow --}}



        </form>
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