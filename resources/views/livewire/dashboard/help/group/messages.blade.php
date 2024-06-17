{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Local Messages</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Local Messages' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}


















    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
        <div class="row g-0 align-items-center mb-2">





            {{-- 1: phoneConfirmatino --}}
            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-phone">
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-phone .item-1"
                                aria-expanded="false" aria-controls="results--sms-phone .item-1">
                                <span>Phone Confirmation</span>
                            </button>
                        </h2>





                        {{-- ------------------------------ --}}
                        {{-- ------------------------------ --}}





                        {{-- content --}}
                        <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-phone">
                            <div class="accordion-body">
                                <div class="row">




                                    {{-- keywords --}}
                                    <div class="col-12 text-center mb-4">


                                        {{-- 1: verCode --}}
                                        <label class="form-label form--label text-theme fs-12 mb-1">@verCode</label>

                                        <label class="form-label form--label profile--label">Verification Code</label>
                                    </div>







                                    {{-- ----------------------- --}}
                                    {{-- ----------------------- --}}







                                    {{-- messages --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- messagesAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message in Arabic
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- submitButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                            href="#">Save</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- endContent --}}


                    </div>
                </div>
            </div>
            {{-- endCol --}}








            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}









            {{-- ** Delivery ** --}}




            {{-- subHeading --}}
            <div class="col-12">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Delivery</h5>
                    </div>
                </div>
            </div>








            {{-- wrapper --}}
            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-delivery">






                    {{-- 1: processing --}}
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-1"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-1">
                                <span style="width: 50%">Processing</span>

                                <small class="tag--optional w-100 text-end me-3"
                                    style="color: var(--bg-theme-dark)">optional</small>
                            </button>
                        </h2>







                        {{-- --------------------- --}}
                        {{-- --------------------- --}}






                        {{-- content --}}
                        <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-delivery">
                            <div class="accordion-body">
                                <div class="row">




                                    {{-- keywords --}}


                                    {{-- orderNumber --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>





                                    {{-- firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
                                            class="form-label form--label profile--label">First Name</label>
                                    </div>




                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>




                                    {{-- --------------------------- --}}
                                    {{-- --------------------------- --}}







                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>



                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message Ar
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- submitButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}








                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}






                    {{-- 2: canceled --}}
                    <div class="accordion-item results--order results--sms">



                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-2"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-2">
                                <span style="width: 50%">Canceled</span>
                            </button>
                        </h2>





                        {{-- --------------------------- --}}
                        {{-- --------------------------- --}}






                        {{-- content --}}
                        <div class="accordion-collapse collapse item-2 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-delivery">
                            <div class="accordion-body">
                                <div class="row">



                                    {{-- keywords --}}



                                    {{-- 1: orderNumber --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>




                                    {{-- 2: firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>






                                    {{-- 3: lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last-name</label>
                                    </div>






                                    {{-- ------------------------------ --}}
                                    {{-- ------------------------------ --}}







                                    {{-- messages --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message in Arabic
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">

                                        {{-- 1: toggleActive --}}
                                        <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Disable</a>





                                        {{-- 2: submitButton --}}
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}









                    {{-- ----------------------------------------- --}}
                    {{-- ----------------------------------------- --}}








                    {{-- 3: completed --}}
                    <div class="accordion-item results--order results--sms">



                        {{-- headers --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-3"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-3">
                                <span style="width: 50%">Completed</span>
                            </button>
                        </h2>
                        {{-- endHeader --}}








                        {{-- ----------------------------- --}}
                        {{-- ----------------------------- --}}






                        {{-- content --}}
                        <div class="accordion-collapse collapse item-3 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-delivery">
                            <div class="accordion-body">
                                <div class="row">




                                    {{-- keywords --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>




                                    {{-- firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>





                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>





                                    {{-- ------------------------------ --}}
                                    {{-- ------------------------------ --}}







                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>


                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message in Arabic
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>






                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">


                                        {{-- 1: toggleActive --}}
                                        <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Disable</a>



                                        {{-- 2: submitButton --}}
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}

                </div>
            </div>








            {{-- --------------------------------------------------------- --}}
            {{-- --------------------------------------------------------- --}}
            {{-- --------------------------------------------------------- --}}







            {{-- 3: Pickup --}}




            {{-- subheading --}}
            <div class="col-12">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Pickup</h5>
                    </div>
                </div>
            </div>




            {{-- ---------------------------- --}}
            {{-- ---------------------------- --}}





            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-collection">





                    {{-- 1: processing --}}
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-1"
                                aria-expanded="false" aria-controls="results--sms-collection .item-1">
                                <span style="width: 50%">Processing</span>
                                <small class="tag--optional w-100 text-end me-3 d-none">optional</small>
                            </button>
                        </h2>






                        {{-- ------------------------- --}}
                        {{-- ------------------------- --}}







                        {{-- content --}}
                        <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">



                                    {{-- keywords --}}


                                    {{-- orderNumber --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>







                                    {{-- firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>




                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>






                                    {{-- pickupCode --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label>
                                        <label class="form-label form--label profile--label">Pickup Code</label>
                                    </div>




                                    {{-- ----------------------------------------- --}}
                                    {{-- ----------------------------------------- --}}








                                    {{-- empty --}}
                                    <div class="col-8 text-center mb-4"></div>




                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>


                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message in Arabic
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- submitButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}











                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}







                    {{-- 2: canceled --}}
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-2"
                                aria-expanded="false" aria-controls="results--sms-collection .item-2">
                                <span class="text-danger" style="width: 50%">Canceled</span>
                            </button>
                        </h2>





                        {{-- --------------------------------- --}}
                        {{-- --------------------------------- --}}








                        {{-- content --}}
                        <div class="accordion-collapse collapse item-2 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">



                                    {{-- keywords --}}



                                    {{-- 1: orderNumber --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>






                                    {{-- firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>






                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>





                                    {{-- pickupCode --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label>
                                        <label class="form-label form--label profile--label">Pickup Code</label>
                                    </div>






                                    {{-- empty --}}
                                    <div class="col-8 text-center mb-4"></div>





                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}






                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>


                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message in Arabic
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>




                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">


                                        {{-- 1; toggleEnable --}}
                                        <a class="btn btn--outline-theme btn--outline-theme btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Enable</a>



                                        {{-- 2: submitButton --}}
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}










                    {{-- ----------------------------------- --}}
                    {{-- ----------------------------------- --}}







                    {{-- 3: completed --}}
                    <div class="accordion-item results--order results--sms">



                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-3"
                                aria-expanded="false" aria-controls="results--sms-collection .item-3">
                                <span style="width: 50%">Completed</span>
                            </button>
                        </h2>







                        {{-- ----------------------------------------- --}}
                        {{-- ----------------------------------------- --}}





                        {{-- content --}}
                        <div class="accordion-collapse collapse item-3 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">



                                    {{-- keywords --}}



                                    {{-- orderNumber --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                        <label class="form-label form--label profile--label">Order Number</label>
                                    </div>





                                    {{-- firstName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>



                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>






                                    {{-- pickupCode --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label>
                                        <label class="form-label form--label profile--label">Pickup Code</label>
                                    </div>





                                    {{-- ------------------------------- --}}
                                    {{-- ------------------------------- --}}







                                    {{-- empty --}}
                                    <div class="col-8 text-center mb-4"></div>





                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message
                                            <small class="tag--optional">0/140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message Ar
                                            <small class="tag--optional">0/140</small>
                                        </label>


                                        <textarea class="form--input form--textarea"></textarea>
                                    </div>





                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">



                                        {{-- 1: toggleActive --}}
                                        <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Disable</a>




                                        {{-- 2: submitButton --}}
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>

                                    </div>
                                    {{-- endActions --}}



                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}



                </div>
            </div>
            {{-- endCol --}}





        </div>
    </section>
    {{-- endSection --}}










</div>
{{-- endCol --}}