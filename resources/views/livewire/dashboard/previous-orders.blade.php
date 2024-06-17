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
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
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
                    <a class="btn btn--export scale--3 px-4" role="button" href="#">
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
                    <a class="btn btn--export scale--3 px-4 ms-2" role="button" href="#">
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



            {{-- typeFilter --}}
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










            {{-- secondFilters --}}
            <div class="row align-items-end">



                {{-- 1: counry --}}
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




                {{-- deliveryArea [delivery] --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Area</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- ------------------------------------- --}}
                {{-- ------------------------------------- --}}






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




                {{-- employees --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Employee</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- sorting --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Sorting</label>
                    <div class="select--single-wrapper">
                        <select class="form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




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
                    <input type="search" class="form--input" />
                </div>


                {{-- fromDate --}}
                <div class="col-4 mb-4">
                    <input class="form--input" type="date" />
                </div>



                {{-- untilDate --}}
                <div class="col-4 mb-4">
                    <input class="form--input" type="date" />
                </div>









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
                            Total</span>29,500
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
                            Total</span>10,000
                    </label>
                </div>






                {{-- counter --}}
                <div class="col-4 text-end">
                    <h3 class="text-end row--counter">2</h3>
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




                        {{-- order --}}
                        <div class="accordion-item results--order">



                            {{-- headers --}}
                            <h2 class="accordion-header" role="tab">
                                <button class="accordion-button collapsed results--order-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#results--orders .item-1"
                                    aria-expanded="false" aria-controls="results--orders .item-1">

                                    {{-- 1: customer --}}
                                    <span>Ahmed Omer</span>


                                    {{-- 2: totalPrice --}}
                                    <span class="fw-bold">12,250</span>



                                    {{-- 3: state - deliveryArea / pickupStore --}}
                                    <span>Khartoum / Ebaid Khatim</span>



                                    {{-- 4: status --}}
                                    <span class="text-theme">Completed</span>
                                </button>
                            </h2>






                            {{-- --------------------------- --}}
                            {{-- --------------------------- --}}





                            {{-- content --}}
                            <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                                data-bs-parent="#results--orders">
                                <div class="accordion-body">
                                    <div class="row">



                                        {{-- 1: customer --}}
                                        <div class="col-4 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Customer</label>
                                                <p>Ahmad Omar</p>
                                            </div>
                                        </div>




                                        {{-- phone --}}
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





                                        {{-- address --}}
                                        <div class="col-12 mb-4">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Rough Address</label>
                                                <p>Lorem ipsum dolor sit amet consectetur,adipisicing elit. Quo, iusto
                                                    ad. Ipsam voluptas ipsa tempora, odio exercitationem excepturi minus
                                                    earum commodi.
                                                </p>
                                            </div>
                                        </div>






                                        {{-- ------------------------------------- --}}
                                        {{-- ------------------------------------- --}}





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






                                        {{-- ------------------------------------- --}}
                                        {{-- ------------------------------------- --}}





                                        {{-- notes --}}
                                        <div class="col-12 mb-3">
                                            <div class="profile--title-wrap">
                                                <label class="form-label profile--span-title">Additional Notes</label>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Quo
                                                </p>
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
                            {{-- end content --}}


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