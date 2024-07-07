{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Customer Order</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.userProfile', [$user->id]) }}" title='Customer Order' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>


        {{-- information --}}
        <div id="information--row" class="mb-5">
            <div class="row g-0 align-items-start">



                {{-- customer --}}
                <div class="col-4 mb-5">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Customer</label>
                        <p>
                            <a class="text-decoration-none text-theme"
                                href="{{ route('dashboard.userProfile', [$user->id]) }}">{{ $user->fullName() }}</a>
                        </p>
                    </div>
                </div>






                {{-- 1: receiver --}}
                <div class="col-4 mb-4">


                    {{-- globalOnly --}}
                    @if ($user->country->name != 'Sudan')

                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Receiver</label>
                        <p>
                            <a class="text-decoration-none text-theme"
                                href="{{ route('dashboard.userReceiver', [$user->id, $order->receiverId]) }}">
                                {{ $order?->receiverName }}
                            </a>
                        </p>
                    </div>

                    @endif
                    {{-- end if --}}


                </div>
                {{-- endCol --}}









                {{-- switchCurrency --}}
                @if ($user->country->name != 'Sudan')


                <div class="col-4 text-center mb-5">

                    {{-- 1: SDN --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 @if ($toSDG == 1) active @endif"
                        wire:click="convertCurrency(1)" type="button">
                        <img class="me-2" src="{{url('assets/img/Flags/SD.png')}}" />SDN</button>



                    {{-- B: toSDG = global --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 ms-2 @if ($toSDG != 1) active @endif"
                        type="button" wire:click="convertCurrency({{ $user->country->toSDG }})">
                        <img class="me-2" src="{{ url('assets/img/Flags/' . $user->country->code . '.png') }}" />
                        {{ $user->country->currency }}
                    </button>


                </div>


                @endif
                {{-- end if --}}








                {{-- empty --}}
                <div class="col-12"></div>





                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}








                {{-- 1: orderNumber --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Order Number</label>
                        <p>{{ $order?->orderNumber }}</p>
                    </div>
                </div>










                {{-- 2: methodOfReciption --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Method &amp; place of receipt</label>


                        {{-- A: delivery --}}
                        @if ($order->receivingOption == 'Delivery')

                        <p>{{ $order->receivingOption }} - {{ $order->deliveryRegion?->name }}</p>


                        {{-- B: pickup --}}
                        @else

                        <p>{{ $order->receivingOption }} - {{ $order->store?->title }}</p>

                        @endif
                        {{-- end if --}}


                    </div>
                </div>








                {{-- 3: dateTime --}}
                <div class="col-4 text-center mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">DateTime</label>
                        <p>{{ date('d M Y - h:i A', strtotime($order->orderDateTime)) }}</p>
                    </div>
                </div>







                {{-- empty --}}
                <div class="col-12 mb-4"></div>









                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}








                {{-- 4: pickupCode --}}
                @if ($order->receivingOption == 'Pickup')


                <div class="col-2 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Pickup Code</label>
                        <p>{{ $order?->orderNumber }}</p>
                    </div>
                </div>




                {{-- 4.5: deliveryPrice --}}
                @else


                <div class="col-2 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Charge</label>
                        <p>{{ number_format(($order?->deliveryPrice ?? 0) / $toSDG, 2) }}</p>
                    </div>
                </div>


                @endif
                {{-- end if --}}









                {{-- 5: status --}}
                <div class="col-2 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Status</label>
                        <p>{{ $order->orderStatus }}</p>
                    </div>
                </div>







                {{-- empty --}}
                <div class="col-4"></div>







                {{-- 7: dateTime --}}
                <div class="col-4 text-center mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">{{ $order?->orderEmployee?->name }}</label>
                        <p>{{ $order->orderStatusDateTime ? date('d M Y - h:i A',
                            strtotime($order->orderStatusDateTime)) : '' }}</p>
                    </div>
                </div>










                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}






                {{-- 8: invoice --}}
                <div class="col-2 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Invoice</label>
                        <p>{{ $order?->invoiceNumber ?? ''}}</p>
                    </div>
                </div>








                {{-- 9: status --}}
                <div class="col-2 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Status</label>
                        <p class="fw-semibold @if ($order?->isPaymentDone) text-success @else text-danger @endif">{{
                            $order?->isPaymentDone ? 'Paid' : 'Not Paid' }}</p>
                    </div>
                </div>










                {{-- 6: paymentMethod --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Payment Method</label>
                        <p>{{ $order?->payment?->name ?? '' }}</p>
                    </div>
                </div>







                {{-- 11: paymentDateTime --}}
                <div class="col-4 text-center mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">{{ $order?->paymentEmployee?->name }}</label>
                        <p>{{ $order->paymentDateTime ? date('d M Y - h:i A',
                            strtotime($order->paymentDateTime)) : '' }}</p>
                    </div>
                </div>

















                {{-- -------------------------------------------------- --}}
                {{-- -------------------------------------------------- --}}




                {{-- seperator --}}
                <div class="col-12 mt-4"></div>





                {{-- totals --}}



                {{-- totalProducts --}}
                <div class="col-4 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Total Products</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $order?->products?->count() ?? 0 }}</h4>
                </div>




                {{-- productsPrice --}}
                <div class="col-3 offset-1 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Products Price</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">{{( $order?->productsPrice ?? 0) / $toSDG }}</h4>
                </div>




                {{-- totalPrice --}}
                <div class="col-3 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Total Price</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">{{ ($order?->orderTotalPrice ?? 0) / $toSDG }}</h4>
                </div>
            </div>
        </div>
        {{-- endRow --}}











        {{-- ------------------------------------ --}}
        {{-- ------------------------------------ --}}







        {{-- resultsRow --}}
        <div id="results--row">



            {{-- headers --}}
            @if ($order?->products?->count() > 0)


            <div class="row g-0 align-items-center results--header mb-2 active" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Quantity</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Price / one</label>
                </div>
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Total Price</label>
                </div>
            </div>


            @endif
            {{-- endHeaders --}}







            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}





            {{-- loop - products --}}
            @foreach ($order?->products ?? [] as $orderProduct)

            <div class="row g-0 align-items-center results--item" key='single-product-{{ $orderProduct->id }}'>


                {{-- id --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">P-{{ $globalSNCounter++ }}</label>
                </div>


                {{-- name --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $orderProduct?->name }}</label>
                </div>



                {{-- quantity --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ $orderProduct?->orderProductQuantity
                        }}</label>
                </div>


                {{-- sellPrice --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ ($orderProduct?->sellPrice ?? 0) / $toSDG
                        }}</label>
                </div>


                {{-- totalPrice --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">{{ ($orderProduct?->orderProductPrice ?? 0) *
                        $toSDG }}</label>
                </div>
            </div>



            @endforeach
            {{-- end loop --}}




        </div>
    </section>
    {{-- endSection --}}








</div>
{{-- endCol --}}