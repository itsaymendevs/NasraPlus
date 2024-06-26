{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Previous Orders</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
            leftLink="{{ route('dashboard.orders') }}" title='Previous Orders' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}






    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>
        <div id="disable--wrap" class="mb-5">
            <div class="row g-0 align-items-end">



                {{-- TODO: stopReceivingOrders --}}
                {{-- TODO: stopReceivingOrdersGlobally --}}

                <div class="col-7 align-self-end mb-3"></div>




                {{-- ------------------------------------ --}}
                {{-- ------------------------------------ --}}





                {{-- exportExcel --}}
                <div class="col-5 text-end mb-3">



                    {{-- 1: export --}}
                    <a class="btn btn--export scale--3 px-4" role="button" href="javascript:void(0);"
                        wire:click="export('en')" wire:loading.class='disabled'>
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






                    {{-- exportAr --}}
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
        {{-- endWrapper --}}








        {{-- ------------------------------------------------ --}}
        {{-- ------------------------------------------------ --}}








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







                {{-- ------------------------------------- --}}
                {{-- ------------------------------------- --}}






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







                {{-- empty --}}
                <div class="col-12"></div>






                {{-- ------------------------------------- --}}
                {{-- ------------------------------------- --}}





                {{-- searchSerial --}}
                <div class="col-4 mb-2">
                    <div class="d-flex align-items-center justify-content-between" style="width: 90%">
                        <label class="form-label hr--label">Order Serial</label>
                        <hr class="w-100 my-0" />
                    </div>
                </div>




                {{-- fromDate --}}
                <div class="col-4 mb-2">
                    <div class="d-flex align-items-center justify-content-between" style="width: 90%">
                        <label class="form-label hr--label">From Period</label>
                        <hr class="w-100 my-0" />
                    </div>
                </div>





                {{-- untilDate --}}
                <div class="col-4 mb-2">
                    <div class="d-flex align-items-center justify-content-between" style="width: 90%">
                        <label class="form-label hr--label">Until Period</label>
                        <hr class="w-100 my-0" />
                    </div>
                </div>






                {{-- ------------ --}}
                {{-- ------------ --}}



                {{-- search --}}
                <div class="col-4 mb-4">
                    <input type="search" class="form--input" wire:model.live='searchOrderNumber' />
                </div>




                {{-- fromDate --}}
                <div class="col-4 mb-4">
                    <input type="date" class="form--input" wire:model.live='searchFromDate' />
                </div>



                {{-- untilDate --}}
                <div class="col-4 mb-4">
                    <input type="date" class="form--input" wire:model.live='searchUntilDate' />
                </div>









                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}






                {{-- 1: totalProductsRevenue --}}
                <div class="col-4">
                    <label class="col-form-label form--label profile--label scale--3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-chevron-compact-right">
                            <path fill-rule="evenodd"
                                d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z">
                            </path>
                        </svg>

                        <span class="fw-600 profile--span-title me-2" style="line-height: initial">Products
                            Total</span>{{ $rawOrders?->sum('productsPrice') ?? 0 }}
                    </label>
                </div>









                {{-- 2: totalDeliveryRevenue --}}
                <div class="col-4">
                    <label class="col-form-label form--label profile--label scale--3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-chevron-compact-right">
                            <path fill-rule="evenodd"
                                d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z">
                            </path>
                        </svg>
                        <span class="fw-600 profile--span-title me-2" style="line-height: initial">Delivery
                            Total</span>{{ $rawOrders?->sum('deliveryPrice') ?? 0 }}
                    </label>
                </div>






                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">{{ $orders?->total() }}</h3>
                </div>

            </div>
        </div>
        {{-- endFilters --}}










        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}








        {{-- resultsRow --}}
        <div id="results--row">
            <div class="row g-0 align-items-center mb-2">
                <div class="col-12">


                    {{-- wrapper --}}
                    <div class="accordion" role="tablist" id="results--orders">




                        {{-- loop - orders --}}
                        @foreach ($orders ?? [] as $order)


                        <div class="accordion-item results--order" key='single-order-{{ $order->id }}'>



                            {{-- headers --}}
                            <h2 class="accordion-header" role="tab">
                                <button class="accordion-button collapsed results--order-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#results--orders .item-{{ $order->id }}"
                                    aria-expanded="false" aria-controls="results--orders .item-{{ $order->id }}">

                                    {{-- customer --}}
                                    <span>{{ $order?->user?->fullName() }}</span>





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
                                    <span class="fw-bold fs-13
                                    @if ($order->orderStatus == 'Canceled') text-danger @endif
                                    @if ($order->orderStatus == 'Completed') text-success @endif">{{
                                        $order->orderStatus }}</span>





                                </button>
                            </h2>






                            {{-- --------------------------- --}}
                            {{-- --------------------------- --}}





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
                                                    $$order?->orderEmployee?->name : '' }}
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
                                                href='_blank'
                                                href="{{ route('dashboard.singleOrder', [$order->id]) }}">View Order</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- end content --}}


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