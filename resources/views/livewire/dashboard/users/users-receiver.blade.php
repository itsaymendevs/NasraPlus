{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Receiver Profile</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.userProfile', [$user->id]) }}" title='Receiver Profile' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- informationRow --}}
        <div id="information--row" class="mb-5">
            <div class="row align-items-start">




                {{-- 1: name --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Full Name</label>
                        <p>{{ $receiver->name }}</p>
                    </div>
                </div>




                {{-- 2: phone --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Phone</label>
                        <p>{{ $receiver->phone }}{{ $receiver->secondPhone ? " / {$receiver->secondPhone}" : '' }}</p>
                    </div>
                </div>




                {{-- 3: user --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">User</label>
                        <p>
                            <a class="fw-600 text-decoration-none text-theme"
                                href="{{ route('dashboard.userProfile', [$user->id]) }}">{{ $user->fullName() }}</a>
                        </p>
                    </div>
                </div>




                {{-- 4: country --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Country</label>
                        <p>{{ $receiver?->state?->name }}, {{ $receiver->state?->country?->name }}</p>
                    </div>
                </div>



                {{-- 5: deliveryRegion --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Region</label>
                        <p>{{ $receiver?->deliveryRegion?->name }}</p>
                    </div>
                </div>





                {{-- 6: location --}}
                <div class="col-12 mb-5">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Rough Location</label>
                        <p>{{ $receiver?->address }}</p>
                    </div>
                </div>











                {{-- ------------------------------------------------- --}}
                {{-- ------------------------------------------------- --}}




                {{-- totals --}}




                {{-- 1: totalOrders --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Total Orders</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $receiver?->orders()?->count() ?? 0 }}</h4>
                </div>



                {{-- 2: completed --}}
                <div class="col-2 offset-1 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Completed</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">{{ $receiver?->completedOrders()?->count() ?? 0 }}</h4>
                </div>



                {{-- 3: canceled --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Canceled</label>
                    <h4 class="mt-2 mb-0 fw-bold text-danger">{{ $receiver?->canceledOrders()?->count() ?? 0 }}</h4>
                </div>


                {{-- 4: processing --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Processing</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $receiver?->processingOrders()?->count() ?? 0 }}</h4>
                </div>



                {{-- 5: pending --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Pending</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $receiver?->pendingOrders()?->count() ?? 0 }}</h4>
                </div>
            </div>
        </div>
        {{-- endRow --}}






        {{-- ------------------------------------ --}}
        {{-- ------------------------------------ --}}






        {{-- filtersRow --}}
        <div id="filters--wrap">
            <div class="row align-items-end">


                {{-- 1: status --}}
                <div class="col-4 mb-4 pb-3">
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form--select" data-placeholder="Order Status" data-instance='searchStatus'
                            data-clear="true">
                            <option value=""></option>

                            @foreach ($statuses ?? [] as $status)
                            <option value="{{ $status }}">{{ $status }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>








                {{-- convertCurrency --}}
                <div class="col-8 text-end mb-4 pb-3">




                    {{-- global --}}
                    @if ($user->country->name != 'Sudan')


                    {{-- A: toSDG = 1 --}}
                    <button class="btn btn--export btn--currency scale--3 px-4
                    @if ($toSDG == 1) active @endif" type="button" wire:click="convertCurrency(1)">
                        <img class="me-2" src="{{url('assets/img/Flags/sd.png')}}" />SDN</button>



                    {{-- B: toSDG = global --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 ms-2
                    @if ($toSDG != 1) active @endif" type="button"
                        wire:click="convertCurrency({{ $user->country->toSDG }})">
                        <img class="me-2" src="{{ url('assets/img/Flags/' . $user->country->code . '.png') }}" />
                        {{ $user->country->currency }}
                    </button>




                    @endif
                    {{-- end if --}}




                </div>
                {{-- endCol --}}



            </div>
        </div>






        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}








        {{-- resulsRow --}}
        <div id="results--row">




            {{-- 1: headers --}}
            @if ($orders?->count() > 0)

            <div class="row g-0 align-items-center results--header mb-2 active" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Receiving Method</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Products</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Status</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label">Price</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label">Payment</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>

            @endif
            {{-- end if --}}







            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}






            {{-- loop - orders --}}
            @foreach ($orders ?? [] as $order)

            <div class="row g-0 align-items-center results--item" key='single-order-{{ $order->id }}'>



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">OR-{{ $order->orderNumber }}</label>
                </div>



                {{-- 2: receivingMethod --}}
                <div class="col-3">

                    {{-- A: delivery --}}
                    @if ($order->receivingOption == 'Delivery')


                    <label class="col-form-label form--label row--label">{{ $order->receivingOption }} - {{
                        $order?->deliveryRegion?->name }}</label>



                    {{-- B: pickup --}}
                    @else

                    <label class="col-form-label form--label row--label">{{ $order->receivingOption }} - {{
                        $order?->store?->title }}</label>

                    @endif
                    {{-- end if --}}

                </div>



                {{-- 3: products --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $order?->products?->count() ?? 0 }}</label>
                </div>



                {{-- 4: status --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $order?->orderStatus }}</label>
                </div>



                {{-- 5: totalPrice --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">{{ ($order?->orderTotalPrice ?? 0) * $toSDG
                        }}</label>
                </div>




                {{-- 6: paymentMethod --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">{{ $order?->payment?->name }}</label>
                </div>






                {{-- viewButton --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">
                            <a class="dropdown-item" target='_blank'
                                href="{{ route('dashboard.userOrder', [$order->id]) }}">View
                                Details</a>
                        </div>
                    </div>
                </div>

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






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}










</div>
{{-- endCol --}}