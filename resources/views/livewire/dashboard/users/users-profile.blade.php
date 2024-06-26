{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Customer Profile</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.users') }}" title='Customer Profile' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}









    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- 1: informationRow --}}
        <div id="information--row" class="mb-5">
            <div class="row align-items-start">


                {{-- fullName --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Full Name</label>
                        <p>{{ $user->fullName() }}</p>
                    </div>
                </div>




                {{-- phone - secondPhone --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Phone</label>
                        <p>{{ $user?->phone }}{{ $user->secondPhone ? " / {$user?->secondPhone}" : '' }}</p>
                    </div>
                </div>




                {{-- email --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Email Address</label>
                        <p>{{ $user?->email }}</p>
                    </div>
                </div>







                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- country --}}


                {{-- A: local --}}
                @if ($user->country->name == 'Sudan')



                {{-- country --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Country</label>
                        <p>{{ $user->state->name . ', ' . $user->country?->name }}</p>
                    </div>
                </div>





                {{-- deliveryRegion --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Region</label>
                        <p>{{ $user?->deliveryRegion?->name }}</p>
                    </div>
                </div>







                {{-- B: global --}}
                @else


                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Country</label>
                        <p>{{ $user->country?->name }}</p>
                    </div>
                </div>


                @endif
                {{-- end if --}}








                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- toggleActive --}}
                <div class="col-4 align-self-end mb-4 d-none">
                    <div class="form-check form-switch form--switch mb-0">
                        <input class="form-check-input" type="checkbox" id="toggleActive-checkbox-1"
                            wire:model='instance.isActive' wire:change="toggleActive" />
                        <label class="form-check-label ms-1 fs-14 text-uppercase" for="toggleActive-checkbox-1">Activate
                            Account</label>
                    </div>
                </div>







                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- :: IRL - UK --}}
                @if ($user->country->code == 'UK' || $user->country->code == 'IRL')



                {{-- 1: FL --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Address FL</label>
                        <p>{{ $user?->firstAddressLine ?? 'Unavailable' }}</p>
                    </div>
                </div>





                {{-- 2: SL --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Address SL</label>
                        <p>{{ $user?->secondAddressLine ?? 'Unavailable' }}</p>
                    </div>
                </div>




                @endif
                {{-- end if --}}








                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- A: UK --}}
                @if ($user->country->code == 'UK')



                {{-- 1: TL --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Address TL</label>
                        <p>{{ $user?->thirdAddressLine ?? 'Unavailable' }}</p>
                    </div>
                </div>




                {{-- 2: townCity --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Town City</label>
                        <p>{{ $user?->townCity ?? 'Unavailable' }}</p>
                    </div>
                </div>







                {{-- 3: postcode --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Post Code</label>
                        <p>{{ $user?->postcode ?? 'Unavailable' }}</p>
                    </div>
                </div>









                {{-- B: IRL--}}
                @elseif ($user->country->code == 'IRL')






                {{-- 1: TL --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Post Town</label>
                        <p>{{ $user?->postTown ?? 'Unavailable' }}</p>
                    </div>
                </div>




                {{-- 2: townCity --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">County</label>
                        <p>{{ $user?->county ?? 'Unavailable' }}</p>
                    </div>
                </div>







                {{-- 3: postcode --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Eircode</label>
                        <p>{{ $user?->eircode ?? 'Unavailable' }}</p>
                    </div>
                </div>





                @endif
                {{-- end if --}}















                {{-- ---------------------------------------- --}}
                {{-- ---------------------------------------- --}}







                {{-- roughLocation --}}


                {{-- local --}}
                @if ($user->country->name == 'Sudan')


                <div class="col-12 mb-5">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Rough Location</label>
                        <p>{{ $user->address }}</p>
                    </div>
                </div>




                {{-- spacer --}}
                @else


                <div class="col-12 mb-5"></div>


                @endif
                {{-- end if --}}












                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}






                {{-- counters --}}


                {{-- 1: totalOrders --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Total Orders</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $user?->orders?->count() ?? 0}}</h4>
                </div>



                {{-- 1.2: completed --}}
                <div class="col-2 offset-1 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Completed</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">{{ $user?->completedOrders?->count() ?? 0}}</h4>
                </div>



                {{-- 1.3: canceled --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Canceled</label>
                    <h4 class="mt-2 mb-0 fw-bold text-danger">{{ $user?->canceledOrders?->count() ?? 0}}</h4>
                </div>



                {{-- 1.4: processing --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Processing</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $user?->processingOrders?->count() ?? 0}}</h4>
                </div>



                {{-- 1.5: pending --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label text-uppercase fw-semibold fs-12">Pending</label>
                    <h4 class="mt-2 mb-0 fw-bold">{{ $user?->pendingOrders?->count() ?? 0}}</h4>
                </div>
            </div>


        </div>
        {{-- end informationRow --}}










        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}
        {{-- ---------------------------------------------------- --}}









        {{-- tabWrap --}}
        <div class="tab--wrap">



            {{-- 1: tabLinks --}}
            <ul class="nav nav-pills nav-justified" role="tablist" wire:ignore>


                {{-- 1: orders --}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#orders-tab">Orders</a>
                </li>



                {{-- 2: favorites --}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link" role="tab" data-bs-toggle="pill" href="#favs-tab">Favorites</a>
                </li>




                {{-- 3: receivers --}}
                @if ($user->country->name != 'Sudan')

                <li class="nav-item" role="presentation">
                    <a class="nav-link" role="tab" data-bs-toggle="pill" href="#receivers-tab">Receivers</a>
                </li>

                @endif
                {{-- end if --}}



            </ul>






            {{-- ------------------------------------- --}}
            {{-- ------------------------------------- --}}






            {{-- tabContent --}}
            <div class="tab-content">





                {{-- 1: orders --}}
                <div class="tab-pane fade show active" role="tabpanel" id="orders-tab" wire:ignore.self>



                    {{-- 1.2: filtersRow --}}
                    <div id="filters--wrap">
                        <div class="row g-0 align-items-end">


                            {{-- 1: orderStatus --}}
                            <div class="col-4 mb-4 pb-3">
                                <div class="select--single-wrapper" wire:ignore>
                                    <select class="form--select" data-placeholder="Order Status"
                                        data-instance='searchStatus' data-clear="true">
                                        <option value=""></option>

                                        @foreach ($statuses ?? [] as $status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>







                            {{-- -------------------------- --}}
                            {{-- -------------------------- --}}








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
                                    <img class="me-2"
                                        src="{{ url('assets/img/Flags/' . $user->country->code . '.png') }}" />
                                    {{ $user->country->currency }}
                                </button>




                                @endif
                                {{-- end if --}}




                            </div>
                            {{-- endCol --}}





                        </div>
                    </div>
                    {{-- endFilters --}}





                    {{-- ------------------------------------------------- --}}
                    {{-- ------------------------------------------------- --}}






                    {{-- resultsRow --}}
                    <div id="results--row">



                        {{-- headers --}}
                        @if ($orders->total() > 0)

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
                        {{-- endHeaders --}}






                        {{-- ------------------------------ --}}
                        {{-- ------------------------------ --}}







                        {{-- loop - orders --}}
                        @foreach ($orders ?? [] as $order)

                        <div class="row g-0 align-items-center results--item" key='single-order-{{ $order->id }}'>


                            {{-- 1: serial --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">OR-{{ $order->orderNumber
                                    }}</label>
                            </div>





                            {{-- receivingMethod --}}
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






                            {{-- --------------------------- --}}
                            {{-- --------------------------- --}}






                            {{-- products --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">{{ $order?->products?->count() ?? 0
                                    }}</label>
                            </div>



                            {{-- status --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">{{ $order?->orderStatus }}</label>
                            </div>





                            {{-- totalPrice --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">{{ ($order?->orderTotalPrice ?? 0)
                                    * $toSDG }}</label>
                            </div>






                            {{-- paymentMethod --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">{{ $order?->payment?->name
                                    }}</label>
                            </div>





                            {{-- viewButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('dashboard.userOrder', [$order->id]) }}">
                                            View Details</a>
                                    </div>
                                </div>
                            </div>



                        </div>

                        @endforeach
                        {{-- end loop --}}



                    </div>
                </div>
                {{-- endTab --}}










                {{-- --------------------------------------------------- --}}
                {{-- --------------------------------------------------- --}}









                {{-- 2: favoritesTab --}}
                <div class="tab-pane fade" role="tabpanel" id="favs-tab" wire:ignore.self>


                    {{-- !! resetCounter !! --}}
                    @php $globalSNCounter = 1; @endphp





                    {{-- resultsRow --}}
                    <div id="results--row-1">



                        {{-- headers --}}
                        @if ($user->favorites?->count() > 0)

                        <div class="row g-0 align-items-center results--header mb-2" id="results--header-1">
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">Serial</label>
                            </div>
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">Name</label>
                            </div>
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">Sell / Offer Price</label>
                            </div>
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">Quantity</label>
                            </div>
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">Favs</label>
                            </div>
                            <div class="col-1">
                                <label class="col-form-label form--label row--label"></label>
                            </div>
                        </div>


                        @endif
                        {{-- endHeaders --}}









                        {{-- ------------------------------------ --}}
                        {{-- ------------------------------------ --}}






                        {{-- loop - favorites --}}
                        @foreach ($user?->favorites ?? [] as $favorite)


                        <div class="row g-0 align-items-center results--item" key='single-favorite-{{ $favorite->id }}'>




                            {{-- 1: serial --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">P-{{ $globalSNCounter++ }}</label>
                            </div>





                            {{-- 2: name --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label me-1">{{ $favorite->product->name
                                    }}</label>
                            </div>





                            {{-- 3: sell - offerPrice --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">{{ ($favorite->product?->sellPrice
                                    ??
                                    0) * $toSDG }} / {{ $favorite?->product?->offerPrice ?
                                    $favorite->product->offerPrice * $toSDG : '-' }}</label>
                            </div>






                            {{-- 4: quantity --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">{{ $favorite->product->quantity ??
                                    0 }}</label>
                            </div>






                            {{-- 5: favorites --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">{{
                                    $favorite->product?->favorites?->count() ?? 0 }}</label>
                            </div>




                            {{-- editButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('dashboard.editProduct', [$favorite->product->id]) }}">Edit
                                            Product</a>
                                    </div>
                                </div>
                            </div>


                        </div>



                        @endforeach
                        {{-- end loop --}}




                    </div>
                </div>
                {{-- end Tab --}}









                {{-- --------------------------------------------- --}}
                {{-- --------------------------------------------- --}}










                {{-- 3: receiversTab --}}
                <div class="tab-pane fade" role="tabpanel" id="receivers-tab" wire:ignore.self>



                    {{-- resultsRow --}}
                    <div id="results--row-2">



                        {{-- headers --}}
                        @if ($user->receivers?->count() > 0)

                        <div class="row g-0 align-items-center results--header mb-2" id="results--header-2">
                            <div class="col-4">
                                <label class="col-form-label form--label row--label">Receiver</label>
                            </div>
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">Phone</label>
                            </div>
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">Completed</label>
                            </div>
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">Canceled</label>
                            </div>
                            <div class="col-1">
                                <label class="col-form-label form--label row--label"></label>
                            </div>
                        </div>


                        @endif
                        {{-- endHeader --}}







                        {{-- ----------------------------- --}}
                        {{-- ----------------------------- --}}






                        {{-- loop - receivers --}}
                        @foreach ($user?->receivers ?? [] as $receiver)



                        <div class="row g-0 align-items-center results--item" key='single-receiver-{{ $receiver->id }}'>


                            {{-- name --}}
                            <div class="col-4">
                                <label class="col-form-label form--label row--label">{{ $receiver?->name }}</label>
                            </div>



                            {{-- phone --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label me-1">{{ $receiver?->phone
                                    }}</label>
                            </div>



                            {{-- completed --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">{{
                                    $receiver?->completedOrders()?->count() ?? 0 }}</label>
                            </div>



                            {{-- canceled --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">{{
                                    $receiver?->canceledOrders()?->count() ?? 0 }}</label>
                            </div>




                            {{-- viewButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item"
                                            href="{{ route('dashboard.userReceiver', [$user->id, $receiver->id]) }}">View</a>
                                    </div>
                                </div>
                            </div>


                        </div>

                        @endforeach
                        {{-- end loop --}}




                    </div>
                </div>
                {{-- endTab --}}


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