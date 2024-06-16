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
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- 1: informationRow --}}
        <div id="information--row" class="mb-5">
            <div class="row align-items-start">


                {{-- fullName --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Full Name</label>
                        <p>Yasir Ahmed Kamal</p>
                    </div>
                </div>




                {{-- phone - secondPhone --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Phone</label>
                        <p>999590002 / 501982700</p>
                    </div>
                </div>




                {{-- email --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Email Address</label>
                        <p>itaymendevops@gmail.com</p>
                    </div>
                </div>




                {{-- country --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Country</label>
                        <p>Khartoum, Sudan</p>
                    </div>
                </div>



                {{-- deliveryArea --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Area</label>
                        <p>Eibad Khatim</p>
                    </div>
                </div>




                {{-- toggleActive --}}
                <div class="col-4 align-self-end mb-4">
                    <div class="form-check form-switch form--switch mb-0">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" checked="" />
                        <label class="form-check-label ms-1 fs-15" for="formCheck-1">Deactivate Account</label>
                    </div>
                </div>





                {{-- roughLocation --}}
                <div class="col-12 mb-5">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Rough Location</label>
                        <p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in</p>
                    </div>
                </div>





                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}













                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}





                {{-- counters --}}



                {{-- 1: totalOrders --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Total Orders</label>
                    <h4 class="mt-2 mb-0 fw-bold">105</h4>
                </div>



                {{-- 1.2: completed --}}
                <div class="col-2 offset-1 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Completed</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">101</h4>
                </div>



                {{-- 1.3: canceled --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Canceled</label>
                    <h4 class="mt-2 mb-0 fw-bold text-danger">3</h4>
                </div>



                {{-- 1.4: processing --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Processing</label>
                    <h4 class="mt-2 mb-0 fw-bold">1</h4>
                </div>



                {{-- 1.5: pending --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Pending</label>
                    <h4 class="mt-2 mb-0 fw-bold">0</h4>
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
            <ul class="nav nav-pills nav-justified" role="tablist">


                {{-- 1: orders --}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#orders-tab">Orders</a>
                </li>



                {{-- 2: favorites --}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link" role="tab" data-bs-toggle="pill" href="#favs-tab">Favorites</a>
                </li>


                {{-- 3: receivers --}}
                <li class="nav-item" role="presentation">
                    <a class="nav-link" role="tab" data-bs-toggle="pill" href="#receivers-tab">Receivers</a>
                </li>
            </ul>






            {{-- ------------------------------------- --}}
            {{-- ------------------------------------- --}}






            {{-- tabContent --}}
            <div class="tab-content">





                {{-- 1: orders --}}
                <div class="tab-pane fade show active" role="tabpanel" id="orders-tab">



                    {{-- 1.2: filtersRow --}}
                    <div id="filters--wrap">
                        <div class="row g-0 align-items-end">


                            {{-- 1: orderStatus --}}
                            <div class="col-4 mb-4 pb-3">
                                <div class="select--single-wrapper">
                                    <select class="form--select2" data-placeholder="Order Status">
                                        <option value=""></option>
                                        <option value="option">option</option>
                                    </select>
                                </div>
                            </div>






                            {{-- -------------------------- --}}
                            {{-- -------------------------- --}}






                            {{-- convertCurrency --}}
                            <div class="col-8 text-end mb-4 pb-3">


                                {{-- --}}
                                <button class="btn btn--export btn--currency scale--3 px-4 active" type="button">
                                    <img class="me-2" src="{{asset('assets/img/Flags/sd.png')}}" />SDN</button>


                                <button class="btn btn--export btn--currency scale--3 px-4 ms-2 d-none" type="button">
                                    <img class="me-2" src="{{asset('assets/img/Flags/euro.png')}}" />EUR</button>


                                <button class="btn btn--export btn--currency scale--3 px-4 ms-2" type="button">
                                    <img class="me-2" src="{{asset('assets/img/Flags/uk.png')}}" />GBP
                                </button>
                            </div>



                        </div>
                    </div>
                    {{-- endFilters --}}





                    {{-- ------------------------------------------------- --}}
                    {{-- ------------------------------------------------- --}}






                    {{-- resultsRow --}}
                    <div id="results--row">



                        {{-- headers --}}
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
                        {{-- endHeaders --}}






                        {{-- ------------------------------ --}}
                        {{-- ------------------------------ --}}







                        {{-- row --}}
                        <div class="row g-0 align-items-center results--item">


                            {{-- 1: serial --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">OR-10503</label>
                            </div>


                            {{-- receivingMethod --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">Delivery - Ebaid Khatm</label>
                            </div>


                            {{-- products --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">12</label>
                            </div>



                            {{-- status --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">Completed</label>
                            </div>


                            {{-- totalPrice --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">12,580</label>
                            </div>



                            {{-- paymentMethod --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">CyberPay</label>
                            </div>





                            {{-- viewButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item" href="user-order-details.html">View Details</a>
                                    </div>
                                </div>
                            </div>





                        </div>
                        {{-- endRow --}}

                    </div>
                </div>
                {{-- endTab --}}










                {{-- --------------------------------------------------- --}}
                {{-- --------------------------------------------------- --}}









                {{-- 2: favoritesTab --}}
                <div class="tab-pane fade" role="tabpanel" id="favs-tab">



                    {{-- resultsRow --}}
                    <div id="results--row-1">



                        {{-- headers --}}
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
                        {{-- endHeaders --}}









                        {{-- ------------------------------------ --}}
                        {{-- ------------------------------------ --}}






                        {{-- rows --}}
                        <div class="row g-0 align-items-center results--item">


                            {{-- 1: serial --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">P-10503</label>
                            </div>


                            {{-- 2: name --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label me-1">Quina Rice Saria</label>
                            </div>


                            {{-- 3: sell - offerPrice --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label">130 / -</label>
                            </div>


                            {{-- 4: quantity --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">1300</label>
                            </div>



                            {{-- 5: favorites --}}
                            <div class="col-1">
                                <label class="col-form-label form--label row--label">3</label>
                            </div>




                            {{-- editButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit Product</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- endRow --}}




                    </div>
                </div>
                {{-- end Tab --}}









                {{-- --------------------------------------------- --}}
                {{-- --------------------------------------------- --}}










                {{-- 3: receiversTab --}}
                <div class="tab-pane fade" role="tabpanel" id="receivers-tab">



                    {{-- resultsRow --}}
                    <div id="results--row-2">
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
                        {{-- endHeader --}}







                        {{-- ----------------------------- --}}
                        {{-- ----------------------------- --}}






                        {{-- rows --}}
                        <div class="row g-0 align-items-center results--item">


                            {{-- name --}}
                            <div class="col-4">
                                <label class="col-form-label form--label row--label">Ahmed Samir Husam</label>
                            </div>



                            {{-- phone --}}
                            <div class="col-3">
                                <label class="col-form-label form--label row--label me-1">+249 999590002</label>
                            </div>



                            {{-- completed --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">25</label>
                            </div>



                            {{-- canceled --}}
                            <div class="col-2">
                                <label class="col-form-label form--label row--label">2</label>
                            </div>




                            {{-- viewButton --}}
                            <div class="col-1">
                                <div class="dropstart d-flex justify-content-center">
                                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                                        data-bs-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu results--dropdown-menu">
                                        <a class="dropdown-item" href="receiver.html">View Receiver</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        {{-- endRows --}}

                    </div>
                </div>
                {{-- endTab --}}


            </div>
        </div>
    </section>
    {{-- endSection --}}








</div>
{{-- endCol --}}