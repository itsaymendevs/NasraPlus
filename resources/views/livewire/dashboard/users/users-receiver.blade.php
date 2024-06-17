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
            leftLink="{{ route('dashboard.userProfile', [1]) }}" title='Receiver Profile' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- informationRow --}}
        <div id="information--row" class="mb-5">
            <div class="row align-items-start">




                {{-- 1: name --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Full Name</label>
                        <p>Yasir Ahmed Kamal</p>
                    </div>
                </div>




                {{-- 2: phone --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Phone</label>
                        <p>999590002 / 993910860</p>
                    </div>
                </div>




                {{-- 3: user --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">User</label>
                        <p>
                            <a class="fw-600 text-decoration-none text-theme" href="user.html">Yasir Ahmed Kamal</a>
                        </p>
                    </div>
                </div>




                {{-- 4: country --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Country</label>
                        <p>Khartoum, Sudan</p>
                    </div>
                </div>



                {{-- 5: deliveryArea --}}
                <div class="col-4 mb-4">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Area</label>
                        <p>Ebaid Khatim</p>
                    </div>
                </div>





                {{-- 6: location --}}
                <div class="col-12 mb-5">
                    <div class="profile--title-wrap">
                        <label class="form-label profile--span-title">Rough Location</label>
                        <p>
                            eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in<br />
                        </p>
                    </div>
                </div>











                {{-- ------------------------------------------------- --}}
                {{-- ------------------------------------------------- --}}




                {{-- totals --}}




                {{-- 1: totalOrders --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Total Orders</label>
                    <h4 class="mt-2 mb-0 fw-bold">4</h4>
                </div>



                {{-- 2: completed --}}
                <div class="col-2 offset-1 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Completed</label>
                    <h4 class="mt-2 mb-0 fw-bold text-theme">2</h4>
                </div>



                {{-- 3: canceled --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Canceled</label>
                    <h4 class="mt-2 mb-0 fw-bold text-danger">1</h4>
                </div>


                {{-- 4: processing --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Processing</label>
                    <h4 class="mt-2 mb-0 fw-bold">1</h4>
                </div>



                {{-- 5: pending --}}
                <div class="col-2 text-center mb-4">
                    <label class="form-label form--label profile--label scale--3">Pending</label>
                    <h4 class="mt-2 mb-0 fw-bold">0</h4>
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
                    <div class="select--single-wrapper">
                        <select class="form--select" data-placeholder="Order Status">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- 2: switchCurrecy --}}
                <div class="col-8 text-end mb-4 pb-3">


                    {{-- 1: SDN --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 active" type="button">
                        <img class="me-2" src="{{asset('assets/img/Flags/sd.png')}}" />SDN</button>


                    {{-- 2: EUR --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 ms-2 d-none" type="button">
                        <img class="me-2" src="{{asset('assets/img/Flags/euro.png')}}" />EUR</button>



                    {{-- 3: GBP --}}
                    <button class="btn btn--export btn--currency scale--3 px-4 ms-2" type="button">
                        <img class="me-2" src="{{asset('assets/img/Flags/uk.png')}}" />GBP
                    </button>

                </div>
            </div>
        </div>






        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}








        {{-- resulsRow --}}
        <div id="results--row">




            {{-- 1: headers --}}
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






            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}






            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">OR-10503</label>
                </div>



                {{-- 2: receivingMethod --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Delivery - Ebaid Khatm</label>
                </div>



                {{-- 3: products --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">12</label>
                </div>



                {{-- 4: status --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Completed</label>
                </div>



                {{-- 5: totalPrice --}}
                <div class="col-1">
                    <label class="col-form-label form--label row--label">12,580</label>
                </div>




                {{-- 6: paymentMethod --}}
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
    </section>
    {{-- endSection --}}









</div>
{{-- endCol --}}