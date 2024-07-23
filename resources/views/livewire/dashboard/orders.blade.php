{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Current Orders</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Previous Orders'
            leftLink="{{ route('dashboard.previousOrders') }}" title='Current Orders' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}












    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- filtersWrap --}}
        <div id="filters--wrap" class="mb-5">



            {{-- receivingType --}}
            <div class="filters--radio-wrap">


                {{-- 1: allOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="receivingOption-checkbox-3" value='Both'
                        wire:model.live='searchReceivingOption' />
                    <label class="form-check-label" for="receivingOption-checkbox-3">All Orders</label>
                </div>



                {{-- 2: deliveryOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="receivingOption-checkbox-1" value='Delivery'
                        wire:model.live='searchReceivingOption' />
                    <label class="form-check-label" for="receivingOption-checkbox-1">Delivery Orders</label>
                </div>



                {{-- 3: pickupOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="receivingOption-checkbox-2" value='Pickup'
                        wire:model.live='searchReceivingOption' />
                    <label class="form-check-label" for="receivingOption-checkbox-2">Pickup Orders</label>
                </div>
            </div>






            {{-- ---------------------- --}}
            {{-- ---------------------- --}}





            {{-- secondFilters --}}
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









                {{-- A: deliveryFilters --}}



                {{-- 2: state --}}
                <div class="col-4 mb-4 @if ($searchCountry != '1') d-none @endif
                 @if ($searchReceivingOption == 'Pickup' || $searchReceivingOption == 'Both') d-none @endif">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--two" data-level='state'
                            data-instance='searchState' data-clear='true'>
                        </select>
                    </div>
                </div>









                {{-- 3: region --}}
                <div class="col-4 mb-4 @if ($searchCountry != '1') d-none @endif
                @if ($searchReceivingOption == 'Pickup' || $searchReceivingOption == 'Both') d-none @endif">
                    <label class="form-label form--label">Region</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select level--select level--three" data-level='region'
                            data-instance='searchRegion' data-clear='true'>
                        </select>
                    </div>
                </div>








                {{-- B: pickupFilters --}}




                {{-- store --}}
                <div
                    class="col-4 mb-4 @if ($searchReceivingOption == 'Delivery' || $searchReceivingOption == 'Both') d-none @endif">
                    <label class="form-label form--label">Store</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchStore' data-clear='true'>
                            <option value=""></option>

                            {{-- loop - stores --}}
                            @foreach ($stores ?? [] as $store)

                            <option value="{{ $store->id }}">{{ $store->title }}</option>

                            @endforeach
                            {{-- end loop --}}

                        </select>
                    </div>
                </div>












                {{-- empty --}}
                <div class="col-12"></div>





                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}






                {{-- status --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Status</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchStatus' data-clear='true'>
                            <option value=""></option>

                            {{-- loop - statuses --}}
                            @foreach ($statuses ?? [] as $status)

                            <option value="{{ $status }}">{{ $status }}</option>

                            @endforeach
                            {{-- end loop --}}

                        </select>
                    </div>
                </div>







                {{-- payment --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Payment</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchPaymentStatus' data-clear='true'>
                            <option value=""></option>

                            <option value="1">Paid</option>
                            <option value="0">Not Paid</option>

                        </select>
                    </div>
                </div>







                {{-- sortType --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Sort</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-instance='searchSort' data-clear='true'>
                            <option value=""></option>

                            <option value="desc">Newest To Oldest</option>
                            <option value="asc">Oldest To Newest</option>
                        </select>
                    </div>
                </div>







                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}








                {{-- searchSerial --}}
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-between mb-2" style="width: 90%">
                        <label class="form-label hr--label">Order Serial</label>
                        <hr class="w-100 my-0" />
                    </div>
                    <input type="search" class="form--input" wire:model.live='searchOrderNumber' />
                </div>





                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">{{ $orders?->total() ?? 0 }}</h3>
                </div>




            </div>
            {{-- endSecondFilters --}}


        </div>
        {{-- endFiltersRow --}}












        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}







        {{-- resultsRow --}}
        <div id="results--row">
            <div class="row g-0 align-items-center mb-2">
                <div class="col-12">



                    {{-- wrapper --}}
                    <div class="accordion" role="tablist" id="results--orders">


                        {{-- singleOrder --}}
                        @foreach ($orders ?? [] as $order)




                        {{-- topRow --}}
                        <div class="row justify-content-between order--caption">

                            {{-- serial --}}
                            <div class="col-6">
                                <p class='fs-11 ms-2 fw-semibold d-inline-block'><span
                                        class='fs-10 me-1 fw-semibold'>SN.</span>{{
                                    $order->orderNumber}}</p>
                            </div>




                            {{-- date --}}
                            <div class="col-6 text-end">
                                <p class='fs-11 me-2 fw-semibold d-inline-block'>{{ date('d / m / Y - h:i A',
                                    strtotime($order->orderDateTime))}}</p>
                            </div>
                        </div>





                        {{-- ---------------------------- --}}
                        {{-- ---------------------------- --}}




                        <div class="accordion-item results--order order--row" key='single-order-{{ $order->id }}'
                            wire:ignore.self>


                            {{-- header --}}
                            <h2 class="accordion-header" role="tab">
                                <button class="accordion-button results--order-button current collapsed"
                                    wire:ignore.self type="button" data-bs-toggle="collapse"
                                    data-bs-target="#results--orders .item-{{ $order->id }}" aria-expanded="false"
                                    aria-controls="results--orders .item-{{ $order->id }}">


                                    {{-- customer --}}
                                    <span>{{ $order?->user?->fullName() }}</span>



                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}




                                    {{-- paymentStatus --}}


                                    {{-- A: paid --}}
                                    @if ($order->isPaymentDone)

                                    <span class="fw-bold text-success fs-13">Paid</span>


                                    {{-- B: notPaid --}}
                                    @else

                                    <span class="fw-bold text-danger fs-13">Not Paid</span>


                                    @endif
                                    {{-- end if --}}




                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}




                                    {{-- totalPrice --}}
                                    <span class="fw-bold">{{ number_format($order?->orderTotalPrice, 2) }}</span>





                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}




                                    {{-- A: delivery --}}
                                    @if ($order->receivingOption == 'Delivery')

                                    <span>{{ $order?->state?->name }} / {{ $order?->deliveryRegion?->name }}</span>



                                    {{-- B: pickup --}}
                                    @else

                                    <span>{{ $order?->store?->title }}</span>

                                    @endif
                                    {{-- end if --}}






                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}




                                    {{-- status --}}
                                    <span class="fw-bold fs-12 text-uppercase
                                    @if ($order->orderStatus == 'Processing') text-success @endif">{{
                                        $order->orderStatus }}</span>






                                </button>
                            </h2>
                            {{-- endWrapper --}}








                            {{-- ------------------------------- --}}
                            {{-- ------------------------------- --}}





                            {{-- content --}}
                            <div class="accordion-collapse collapse item-{{ $order->id }} pt-2" role="tabpanel"
                                data-bs-parent="#results--orders" wire:ignore.self>
                                <div class="accordion-body">
                                    <div class="row">



                                        {{-- customer --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Customer</label>
                                                <p>{{ $order?->user?->fullName() }}</p>
                                            </div>
                                        </div>





                                        {{-- phone - secondPhone --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Phone</label>
                                                <p>
                                                    {{ $order?->user?->phone }}{{ $order?->orderSecondPhone ? ' / ' .
                                                    $order->orderSecondPhone : '' }}
                                                </p>
                                            </div>
                                        </div>




                                        {{-- paymentMethod --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Payment</label>
                                                <p>{{ $order?->payment?->name }}</p>
                                            </div>
                                        </div>





                                        {{-- addressLocation --}}
                                        <div class="col-12 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Rough Address</label>
                                                <p>{{ $order?->address }}</p>
                                            </div>
                                        </div>





                                        {{-- ----------------------------- --}}
                                        {{-- ----------------------------- --}}






                                        {{-- orderEmployee --}}
                                        <div class="col-6 mb-4">
                                            <div class="profile--title-wrap">
                                                <p class='text-uppercase'>
                                                    {{ $order->orderStatus }}{{ $order?->orderEmployee?->name ? ' / ' .
                                                    $order?->orderEmployee?->name : '' }}
                                                </p>
                                            </div>
                                        </div>




                                        {{-- orderEmployee DateTime --}}
                                        <div class="col-6 text-end mb-4">
                                            <label class="col-form-label form--label text-theme fs-12">
                                                {{ $order?->orderStatusDateTime ? date('d / m / Y - h:i A',
                                                strtotime($order?->orderStatusDateTime)) : '-----' }}
                                            </label>
                                        </div>





                                        {{-- notes --}}
                                        <div class="col-12 mb-3">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Additional Notes</label>
                                                <p>{{ $order?->orderNote ?? 'Unavailable' }}</p>
                                            </div>
                                        </div>







                                        {{-- viewButton --}}
                                        <div class="col-12 text-end mb-2">
                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                                target='_blank'
                                                href="{{ route('dashboard.singleOrder', [$order->id]) }}">View Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endContent --}}


                        </div>

                        @endforeach
                        {{-- end loop --}}



                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}






















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}









    {{-- selectHandle --}}
    <script>
        $(document).on('change', ".form--select", function(event) {



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