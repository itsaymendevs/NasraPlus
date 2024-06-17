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
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- filtersWrap --}}
        <div id="filters--wrap" class="mb-5">



            {{-- receivingType --}}
            <div class="filters--radio-wrap">


                {{-- 1: allOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-3" />
                    <label class="form-check-label" for="formCheck-3">All Orders</label>
                </div>



                {{-- 2: deliveryOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-1" />
                    <label class="form-check-label" for="formCheck-1">Delivery Orders</label>
                </div>



                {{-- 3: pickupOrders --}}
                <div class="form-check form--radio">
                    <input class="form-check-input" type="radio" id="formCheck-2" />
                    <label class="form-check-label" for="formCheck-2">Pickup Orders</label>
                </div>
            </div>






            {{-- ---------------------- --}}
            {{-- ---------------------- --}}





            {{-- secondFilters --}}
            <div class="row align-items-end">




                {{-- 1: country --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Country</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- state --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- deliveryArea [Delivery] --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Area</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>






                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}






                {{-- status --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Status</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- payment --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Payment</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- sortType --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Sorting</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
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
                    <input type="search" class="form--input" />
                </div>





                {{-- counter --}}
                <div class="col-8 text-end">
                    <h3 class="text-end row--counter">2</h3>
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
                        <div class="accordion-item results--order">



                            {{-- header --}}
                            <h2 class="accordion-header" role="tab">
                                <button class="accordion-button results--order-button current" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#results--orders .item-1"
                                    aria-expanded="true" aria-controls="results--orders .item-1">

                                    {{-- customer --}}
                                    <span>Osman Karim</span>


                                    {{-- paymentStatus --}}
                                    <span class="fw-bold text-danger fs-13">NOT PAID</span>


                                    {{-- totalPrice --}}
                                    <span class="fw-bold">12,250</span>



                                    {{-- deliveryArea --}}
                                    <span>Khartoum / Ebaid Khatim</span>


                                    {{-- status --}}
                                    <span>Pending</span>
                                </button>
                            </h2>






                            {{-- ------------------------------- --}}
                            {{-- ------------------------------- --}}





                            {{-- content --}}
                            <div class="accordion-collapse collapse show item-1 pt-2" role="tabpanel"
                                data-bs-parent="#results--orders">
                                <div class="accordion-body">
                                    <div class="row">



                                        {{-- customer --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Customer</label>
                                                <p>Ahmad Omar</p>
                                            </div>
                                        </div>





                                        {{-- phone - secondPhone --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Phone</label>
                                                <p>99590002 / 122909711</p>
                                            </div>
                                        </div>




                                        {{-- paymentMethod --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Payment</label>
                                                <p>Stripe</p>
                                            </div>
                                        </div>





                                        {{-- addressLocation --}}
                                        <div class="col-12 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Rough Address</label>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Quo, iusto ad. Ipsam
                                                    voluptas ipsa tempora, odio exercitationem
                                                    excepturi minus earum commodi.<br />
                                                </p>
                                            </div>
                                        </div>





                                        {{-- ----------------------------- --}}
                                        {{-- ----------------------------- --}}


                                        {{-- orderEmployee --}}
                                        <div class="col-6 mb-4">
                                            <div class="profile--title-wrap">
                                                <p>Pending / Yasir Ahmad</p>
                                            </div>
                                        </div>


                                        {{-- orderEmployee DateTime --}}
                                        <div class="col-6 text-end mb-4">
                                            <label class="col-form-label form--label text-theme fs-12">11 / 12 / 2023 -
                                                06:20 PM</label>
                                        </div>






                                        {{-- notes --}}
                                        <div class="col-12 mb-3">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Additional Notes</label>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo</p>
                                            </div>
                                        </div>





                                        {{-- viewButton --}}
                                        <div class="col-12 text-end mb-2">
                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                                href="single-order.html">View Order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- endContent --}}


                        </div>
                        {{-- endOrder --}}



                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}



















</div>
{{-- endCol --}}