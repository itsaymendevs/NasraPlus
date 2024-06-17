{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Global Messages</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Global Messages' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
        <div class="row g-0 align-items-center mb-2">
            <div class="col-12">



                {{-- tabs --}}
                <div class="accordion mb-5" role="tablist" id="results--sms-phone">



                    {{-- 1: phoneConfirmation --}}
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-phone .item-1"
                                aria-expanded="false" aria-controls="results--sms-phone .item-1">
                                <span>Phone Confirmation</span>
                            </button>
                        </h2>





                        {{-- ----------------------- --}}
                        {{-- ----------------------- --}}





                        {{-- content --}}
                        <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-phone">
                            <div class="accordion-body">
                                <div class="row">



                                    {{-- keywords --}}
                                    <div class="col-12 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@verCode</label>
                                        <label class="form-label form--label profile--label">Verification Code</label>
                                    </div>






                                    {{-- --------------------- --}}
                                    {{-- --------------------- --}}





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






                                    {{-- submiButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                            href="#">Save</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}


                </div>
            </div>
            {{-- endCol --}}












            {{-- ------------------------------------------------- --}}
            {{-- ------------------------------------------------- --}}
            {{-- ------------------------------------------------- --}}




            {{-- 2: delivery Tabs --}}




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




            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-delivery">



                    {{-- 1: processing --}}
                    <div class="accordion-item results--order results--sms">


                        {{-- headers --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-1"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-1">
                                <span style="width: 50%">Processing</span>
                            </button>
                        </h2>






                        {{-- -------------------------------- --}}
                        {{-- -------------------------------- --}}






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
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>





                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>





                                    {{-- receiver --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@receiver</label>
                                        <label class="form-label form--label profile--label">Order Receiver</label>
                                    </div>






                                    {{-- ------------------------------ --}}
                                    {{-- ------------------------------ --}}





                                    {{-- tabWrap --}}
                                    <div class="col-12">
                                        <div class="tab--wrap">



                                            {{-- tabLinks --}}
                                            <ul class="nav nav-pills nav-justified" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab-5">User</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab-5">Receiver</a>
                                                </li>
                                            </ul>




                                            {{-- ------------------------------- --}}
                                            {{-- ------------------------------- --}}





                                            {{-- tabContent --}}
                                            <div class="tab-content pb-0">


                                                {{-- 1: user --}}
                                                <div class="tab-pane active" role="tabpanel" id="user-tab-5">
                                                    <div class="row align-items-center">


                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>





                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>





                                                        {{-- submitButton --}}
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end Tab --}}







                                                {{-- ------------------------- --}}
                                                {{-- ------------------------- --}}





                                                {{-- 2: receiver --}}
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab-5">
                                                    <div class="row align-items-center">



                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar
                                                                <small class="tag--optional">0/140</small>
                                                            </label>


                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- submitButton --}}
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- endTab --}}

                                            </div>
                                            {{-- end tabContent --}}
                                        </div>
                                    </div>
                                    {{-- end tabsWrap --}}




                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}









                    {{-- -------------------------------------------------- --}}
                    {{-- -------------------------------------------------- --}}







                    {{-- canceled --}}
                    <div class="accordion-item results--order results--sms">


                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-2"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-2">
                                <span style="width: 50%">Canceled</span>

                                {{-- indicator --}}
                                <span class="text-end" style="width: 40%">
                                    <small class="sms--indicator">User</small>
                                    <small class="sms--indicator">Receiver</small>
                                </span>

                            </button>
                        </h2>







                        {{-- -------------------------------------- --}}
                        {{-- -------------------------------------- --}}





                        {{-- content --}}
                        <div class="accordion-collapse collapse item-2 pt-2" role="tabpanel"
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
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>




                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>





                                    {{-- receiver --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@receiver</label>
                                        <label class="form-label form--label profile--label">Order Receiver</label>
                                    </div>






                                    {{-- -------------------------------- --}}
                                    {{-- -------------------------------- --}}







                                    {{-- tabsWrap --}}
                                    <div class="col-12">
                                        <div class="tab--wrap">



                                            {{-- navLinks --}}
                                            <ul class="nav nav-pills nav-justified" role="tablist">


                                                {{-- 1: user --}}
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab-1">User</a>
                                                </li>



                                                {{-- 2: receiver --}}
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab-1">Receiver</a>
                                                </li>
                                            </ul>





                                            {{-- ----------------------------- --}}
                                            {{-- ----------------------------- --}}







                                            {{-- content --}}
                                            <div class="tab-content pb-0">




                                                {{-- 1: userTab --}}
                                                <div class="tab-pane active" role="tabpanel" id="user-tab-1">
                                                    <div class="row align-items-center">



                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>





                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>





                                                        {{-- actionButtons --}}
                                                        <div class="col-12 text-center mb-2">


                                                            {{-- 1: toggleActive --}}
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a>


                                                            {{-- 2: submitButton --}}
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end Tab --}}






                                                {{-- ---------------------------------- --}}
                                                {{-- ---------------------------------- --}}






                                                {{-- 2: receiverTab --}}
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab-1">
                                                    <div class="row align-items-center">



                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small class="tag--optional">0/140</small>
                                                            </label>


                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- actions --}}
                                                        <div class="col-12 text-center mb-2">


                                                            {{-- 1: disable --}}
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a>



                                                            {{-- 2: submitButton --}}
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end Tab --}}




                                            </div>
                                        </div>
                                    </div>
                                    {{-- end tabsWrap --}}


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}






                    {{-- ------------------------------------------------ --}}
                    {{-- ------------------------------------------------ --}}






                    {{-- 3: completed --}}
                    <div class="accordion-item results--order results--sms">


                        {{-- headers --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-3"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-3">
                                <span style="width: 50%">Completed</span>


                                {{-- indicators --}}
                                <span class="text-end" style="width: 40%">
                                    <small class="sms--indicator inactive">User</small>
                                    <small class="sms--indicator">Receiver</small></span>
                            </button>
                        </h2>







                        {{-- --------------------------------------- --}}
                        {{-- --------------------------------------- --}}







                        {{-- content --}}
                        <div class="accordion-collapse collapse item-3 pt-2" role="tabpanel"
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
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>




                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>






                                    {{-- reciver --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@receiver</label>
                                        <label class="form-label form--label profile--label">Order
                                            Receiver</label>
                                    </div>






                                    {{-- ---------------------------------------- --}}
                                    {{-- ---------------------------------------- --}}





                                    {{-- tabsWrap --}}
                                    <div class="col-12">
                                        <div class="tab--wrap">



                                            {{-- navLinks --}}
                                            <ul class="nav nav-pills nav-justified" role="tablist">


                                                {{-- 1: user --}}
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab">User</a>
                                                </li>


                                                {{-- 2: receiver --}}
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab">Receiver</a>
                                                </li>
                                            </ul>





                                            {{-- ------------------------------- --}}
                                            {{-- ------------------------------- --}}






                                            {{-- content --}}
                                            <div class="tab-content pb-0">



                                                {{-- 1: userTab --}}
                                                <div class="tab-pane active" role="tabpanel" id="user-tab">
                                                    <div class="row align-items-center">



                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar
                                                                <small class="tag--optional">0/140</small>
                                                            </label>


                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- actions --}}
                                                        <div class="col-12 text-center mb-2">


                                                            {{-- 1: toggleActive --}}
                                                            <a class="btn btn--outline-theme btn--outline-theme btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Enable</a>


                                                            {{-- 2: submitButton --}}
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- endTab --}}







                                                {{-- -------------------------------------- --}}
                                                {{-- -------------------------------------- --}}





                                                {{-- 2: receiverTab --}}
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab">
                                                    <div class="row align-items-center">



                                                        {{-- message --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                <small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- messageAr --}}
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small class="tag--optional">0/140</small>
                                                            </label>

                                                            <textarea class="form--input form--textarea"></textarea>
                                                        </div>




                                                        {{-- actions --}}
                                                        <div class="col-12 text-center mb-2">


                                                            {{-- 1: toggleActive --}}
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a>


                                                            {{-- submitButton --}}
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>


                                        </div>
                                    </div>
                                    {{-- end tabsWrap --}}


                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end item --}}






                    {{-- ----------------------------------------------------- --}}
                    {{-- ----------------------------------------------------- --}}






                    {{-- item --}}
                    <div class="accordion-item results--order results--sms">




                        {{-- header --}}
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-delivery .item-4"
                                aria-expanded="false" aria-controls="results--sms-delivery .item-4">
                                <span style="width: 50%">Confirm <strong>Reception</strong></span>

                                {{-- indicators --}}
                                <span class="text-end" style="width: 40%">
                                    <small class="sms--indicator">Receiver</small>
                                </span>
                            </button>
                        </h2>





                        {{-- ------------------------------------------- --}}
                        {{-- ------------------------------------------- --}}






                        {{-- content --}}
                        <div class="accordion-collapse collapse item-4 pt-2" role="tabpanel"
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
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>
                                        <label class="form-label form--label profile--label">First Name</label>
                                    </div>




                                    {{-- lastName --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>
                                        <label class="form-label form--label profile--label">Last Name</label>
                                    </div>




                                    {{-- receiver --}}
                                    <div class="col-4 text-center mb-4">
                                        <label class="form-label form--label text-theme fs-12 mb-1">@receiver</label>
                                        <label class="form-label form--label profile--label">Order Receiver</label>
                                    </div>




                                    {{-- empty --}}
                                    <div class="col-8 text-center mb-4"></div>





                                    {{-- ------------------------------------ --}}
                                    {{-- ------------------------------------ --}}






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


                                        {{-- 1: toggle --}}
                                        <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Disable</a>



                                        {{-- 2: submitButton --}}
                                        <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- endContent --}}



                    </div>
                </div>
                {{-- endAccording --}}







                {{-- empty --}}
                <div class="d-block mb-4"></div>

            </div>
            {{-- endCol --}}









            {{-- ----------------------------------------------------- --}}
            {{-- ----------------------------------------------------- --}}





            {{-- 3: Pickup --}}




            {{-- subHeading --}}
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






            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}





            <div class="col-12">
                <div class="accordion" role="tablist" id="results--sms-collection">
                    <div class="accordion-item results--order results--sms">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-1"
                                aria-expanded="false" aria-controls="results--sms-collection .item-1">
                                <span style="width: 50%">Processing</span><small
                                    class="tag--optional w-100 text-end me-3 d-none">optional</small>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@orderNum</label><label
                                            class="form-label form--label profile--label">Order Number</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
                                            class="form-label form--label profile--label">User First-name</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userLN</label><label
                                            class="form-label form--label profile--label">User Last-name<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@receiver</label><label
                                            class="form-label form--label profile--label">Order Receiver<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label><label
                                            class="form-label form--label profile--label">Pickup Code<br /></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="tab--wrap">
                                            <ul class="nav nav-pills nav-justified" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab-4">User</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab-4">Receiver</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pb-0">
                                                <div class="tab-pane active" role="tabpanel" id="user-tab-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item results--order results--sms">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-2"
                                aria-expanded="false" aria-controls="results--sms-collection .item-2">
                                <span style="width: 50%">Canceled</span><span class="text-end" style="width: 40%"><small
                                        class="sms--indicator inactive">User</small><small
                                        class="sms--indicator">Receiver</small></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-2 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@orderNum</label><label
                                            class="form-label form--label profile--label">Order Number</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
                                            class="form-label form--label profile--label">User First-name</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userLN</label><label
                                            class="form-label form--label profile--label">User Last-name<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@receiver</label><label
                                            class="form-label form--label profile--label">Order Receiver<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label><label
                                            class="form-label form--label profile--label">Pickup Code<br /></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="tab--wrap">
                                            <ul class="nav nav-pills nav-justified" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab-2">User</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab-2">Receiver</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pb-0">
                                                <div class="tab-pane active" role="tabpanel" id="user-tab-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a><a
                                                                class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab-2">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a><a
                                                                class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item results--order results--sms">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-3"
                                aria-expanded="false" aria-controls="results--sms-collection .item-3">
                                <span style="width: 50%">Completed</span><span class="text-end"
                                    style="width: 40%"><small class="sms--indicator inactive">User</small><small
                                        class="sms--indicator">Receiver</small></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-3 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@orderNum</label><label
                                            class="form-label form--label profile--label">Order Number</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
                                            class="form-label form--label profile--label">User First-name</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userLN</label><label
                                            class="form-label form--label profile--label">User Last-name<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@receiver</label><label
                                            class="form-label form--label profile--label">Order Receiver<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label><label
                                            class="form-label form--label profile--label">Pickup Code<br /></label>
                                    </div>
                                    <div class="col-12">
                                        <div class="tab--wrap">
                                            <ul class="nav nav-pills nav-justified" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" role="tab" data-bs-toggle="pill"
                                                        href="#user-tab-3">User</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" role="tab" data-bs-toggle="pill"
                                                        href="#receiver-tab-3">Receiver</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pb-0">
                                                <div class="tab-pane active" role="tabpanel" id="user-tab-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a><a
                                                                class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="receiver-tab-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-6 mb-4">
                                                            <label
                                                                class="form-label form--label with-counter">Message<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-6 mb-4">
                                                            <label class="form-label form--label with-counter">Message
                                                                Ar<small
                                                                    class="tag--optional">0/140</small></label><textarea
                                                                class="form--input form--textarea"></textarea>
                                                        </div>
                                                        <div class="col-12 text-center mb-2">
                                                            <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                                                role="button" href="#">Disable</a><a
                                                                class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                                                role="button" href="#">Save</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item results--order results--sms">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed results--order-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#results--sms-collection .item-4"
                                aria-expanded="false" aria-controls="results--sms-collection .item-4">
                                <span style="width: 50%">Confirm Reception</span><span class="text-end"
                                    style="width: 40%"><small class="sms--indicator">Receiver</small></span>
                            </button>
                        </h2>
                        <div class="accordion-collapse collapse item-4 pt-2" role="tabpanel"
                            data-bs-parent="#results--sms-collection">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@orderNum</label><label
                                            class="form-label form--label profile--label">Order Number</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
                                            class="form-label form--label profile--label">User First-name</label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@userLN</label><label
                                            class="form-label form--label profile--label">User Last-name<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@receiver</label><label
                                            class="form-label form--label profile--label">Order Receiver<br /></label>
                                    </div>
                                    <div class="col-4 text-center mb-4">
                                        <label
                                            class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label><label
                                            class="form-label form--label profile--label">Pickup Code<br /></label>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message<small
                                                class="tag--optional">0/140</small></label><textarea
                                            class="form--input form--textarea"></textarea>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">Message Ar<small
                                                class="tag--optional">0/140</small></label><textarea
                                            class="form--input form--textarea"></textarea>
                                    </div>
                                    <div class="col-12 text-center mb-2">
                                        <a class="btn btn--outline-theme btn--outline-danger btn--sm fs-12 rounded-1 px-5"
                                            role="button" href="#">Disable</a><a
                                            class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2" role="button"
                                            href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}













</div>
{{-- endCol --}}