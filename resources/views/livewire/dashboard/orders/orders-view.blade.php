{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



   {{-- head --}}
   @section('head')

   <title>Single Order</title>

   @endsection
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}










   {{-- headerSection --}}
   <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div" class="header--div w-100"
      wire:ignore.self>



      <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
         leftLink="{{ route('dashboard.orders') }}" title='Single Order' />


   </section>
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}








   {{-- section --}}
   <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">





      {{-- printWrap --}}
      <div id="print--wrap">
         <div class="row g-0">



            {{-- orderNumber --}}
            <div class="col-3 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Order Number</label>
                  <p>125881</p>
               </div>
            </div>



            {{-- dateTime --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">DateTime</label>
                  <p>12 Sep 2023 - 10:00 PM</p>
               </div>
            </div>


            {{-- print - printForPickup --}}
            <div class="col-5 text-end align-self-end mb-4">
               <a class="btn btn--export scale--3 px-4 me-2" role="button" href="#">Print</a><a
                  class="btn btn--export scale--3 px-4" role="button" href="#">Print for pickup</a>
            </div>
         </div>
      </div>
      {{-- endPrintWrap --}}










      {{-- ---------------------------------------------- --}}
      {{-- ---------------------------------------------- --}}







      {{-- orderWrap --}}
      <div id="order--wrap">


         {{-- orderStatus --}}
         <div class="d-flex align-items-center justify-content-between mb-3 mt-4">

            {{-- subheading --}}
            <label class="form-label hr--label mb-0 fs-14">Order Status</label>
            <hr class="w-100 my-0" />


            {{-- employee - dateTime --}}
            <label class="form-label text-center hr--label mb-0" s="" style="min-width: 160px">
               <span class="d-block mb-1 fw-bold">Ahmed Omar</span>
               <span class="d-block mb-1">12 Sep 2023 - 10:00 PM</span>
            </label>
         </div>





         {{-- ------------------------------------------- --}}
         {{-- ------------------------------------------- --}}







         {{-- orderStatus - content --}}
         <div class="row g-0 mb-5 pb-4">
            <div class="col-12">


               {{-- tabWrap --}}
               <div class="tab--wrap">



                  {{-- tabLinks --}}
                  <ul class="nav nav-pills nav-justified" role="tablist">


                     {{-- 1: processingOrder --}}
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#processing-tab">Processing
                           Order</a>
                     </li>



                     {{-- 2: cancel Order --}}
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" role="tab" data-bs-toggle="pill" href="#cancelling-tab">Cancelling
                           Order</a>
                     </li>
                  </ul>
                  {{-- end tabLinks --}}









                  {{-- ----------------------------------------- --}}
                  {{-- ----------------------------------------- --}}







                  {{-- tabContent --}}
                  <div class="tab-content">
                     <div class="tab-pane fade show active" role="tabpanel" id="processing-tab">
                        <div class="row mx-0">
                           <div class="col-12" id="processing-extras">



                              {{-- inner - tabsWrap --}}
                              <div class="tab--wrap">



                                 {{-- tabLinks --}}
                                 <ul class="nav nav-tabs justify-content-center border-0 mb-4" role="tablist">



                                    {{-- 1: message --}}
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link btn--theme btn--sm rounded-1 fs-13 text-capitalize me-2 border-0"
                                          role="tab" data-bs-toggle="tab" href="#message-tab">Message</a>
                                    </li>



                                    {{-- 2: orderNote --}}
                                    <li class="nav-item" role="presentation">
                                       <a class="nav-link active btn--theme btn--sm px-4 rounded-1 fs-13 text-capitalize border-0"
                                          role="tab" data-bs-toggle="tab" href="#note-tab">Order Note</a>
                                    </li>
                                 </ul>




                                 {{-- --------------------------------- --}}
                                 {{-- --------------------------------- --}}






                                 {{-- innerTab Content --}}
                                 <div class="tab-content py-0">




                                    {{-- 1: messageTab --}}
                                    <div class="tab-pane fade" role="tabpanel" id="message-tab">
                                       <div class="row px-3 py-4 bg-white rounded-1 shadow-sm">



                                          {{-- keywords --}}

                                          {{-- orderNumber --}}
                                          <div class="col-4 text-center mb-4">
                                             <label
                                                class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                                             <label class="form-label form--label profile--label">Order
                                                Number</label>
                                          </div>



                                          {{-- firstName --}}
                                          <div class="col-4 text-center mb-4">
                                             <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label>

                                             <label class="form-label form--label profile--label">First
                                                Name</label>
                                          </div>





                                          {{-- lastName --}}
                                          <div class="col-4 text-center mb-4">
                                             <label class="form-label form--label text-theme fs-12 mb-1">@userLN</label>

                                             <label class="form-label form--label profile--label">User
                                                Last-name</label>
                                          </div>







                                          {{-- pickupCode --}}
                                          <div class="col-4 text-center mb-4 d-none">
                                             <label
                                                class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label>

                                             <label class="form-label form--label profile--label">Pickup
                                                Code</label>
                                          </div>





                                          {{-- empty --}}
                                          <div class="col-8 text-center mb-4 d-none"></div>




                                          {{-- ------------------------------------ --}}
                                          {{-- ------------------------------------ --}}









                                          {{-- 1: customerMessage --}}
                                          <div class="col-6 mb-4">
                                             <label class="form-label form--label with-counter">
                                                Customer Message
                                                <small class="tag--optional">0/140</small>
                                             </label>


                                             <textarea
                                                class="form--input form--textarea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis repellat nesciunt vitae dicta recusandae aliquid? Maxime, accusantium repellat?</textarea>




                                             {{-- submitButton --}}
                                             <div class="text-center me-4 mt-2">
                                                <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                                   href="#">Send</a>
                                             </div>
                                          </div>
                                          {{-- endCol --}}









                                          {{-- 2: receiverMessage [Global] --}}
                                          <div class="col-6 mb-4">
                                             <label class="form-label form--label with-counter">Receiver
                                                Message
                                                <small class="tag--optional">0/140</small>
                                             </label>


                                             <textarea
                                                class="form--input form--textarea">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente dicta commodi odit voluptatibus enim, repellat aliquid illo!</textarea>



                                             {{-- submitButton --}}
                                             <div class="text-center me-4 mt-2">
                                                <a class="btn btn--theme btn--sm fs-12 rounded-1 px-5" role="button"
                                                   href="#">Send</a>
                                             </div>
                                          </div>





                                       </div>
                                    </div>
                                    {{-- end Tab --}}







                                    {{-- ---------------------------------------- --}}
                                    {{-- ---------------------------------------- --}}






                                    {{-- 2: orderNote Tab --}}
                                    <div class="tab-pane fade show active" role="tabpanel" id="note-tab">
                                       <div class="row px-4 py-4 bg-white rounded-1 shadow-sm">


                                          {{-- orderNote --}}
                                          <div class="col-9">
                                             <label class="form-label form--label">Note Content</label>

                                             <textarea class="form--input form--textarea w-100"></textarea>
                                          </div>




                                          {{-- -------------------- --}}
                                          {{-- -------------------- --}}



                                          {{-- submitButton --}}
                                          <div class="col-3 text-end align-self-end">
                                             <button class="btn btn btn--outline-theme rounded-1 px-4 mb-1"
                                                type="button">Save</button>
                                          </div>


                                       </div>
                                    </div>
                                    {{-- end Tab --}}


                                 </div>
                              </div>
                           </div>
                           {{-- endCol --}}




                           {{-- ----------------------------------- --}}
                           {{-- ----------------------------------- --}}





                           {{-- seperator --}}
                           <div class="col-12 text-end align-self-end">
                              <hr class="mb-4" />
                           </div>




                           {{-- ----------------------------------- --}}
                           {{-- ----------------------------------- --}}






                           {{-- processingButtons --}}
                           <div class="col-12 text-center mb-4" id="processing-buttons">

                              {{-- 1: previous --}}
                              <button class="btn border-0 rounded-1 me-2" type="button"> Previous</button>


                              {{-- 2: next --}}
                              <button class="btn btn--theme btn--sm px-4 rounded-1 fs-13 text-capitalize" type="button">
                                 Next Process
                              </button>
                           </div>







                           {{-- ----------------------------------- --}}
                           {{-- ----------------------------------- --}}






                           {{-- processingIndicators --}}
                           <div class="col-12" id="processing-steps">
                              <div class="processing-steps rounded-1">




                                 {{-- 1: pending --}}
                                 <button class="btn btn--sm px-4 rounded-1 fs-13 text-capitalize scale--3 active"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                       viewBox="0 0 16 16" class="bi bi-info-circle me-2" data-bs-toggle="tooltip"
                                       data-bss-tooltip="" data-bs-placement="bottom" title="Order is in pending state">
                                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                       </path>
                                       <path
                                          d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                                       </path>
                                    </svg>Pending
                                 </button>


                                 {{-- hr --}}
                                 <hr style="width: 10%" />





                                 {{-- 2: processing --}}
                                 <button class="btn btn--sm px-4 rounded-1 fs-13 text-capitalize scale--3"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                       viewBox="0 0 16 16" class="bi bi-info-circle me-2" data-bs-toggle="tooltip"
                                       data-bss-tooltip="" data-bs-placement="bottom"
                                       title="Order is in processing state">
                                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                       </path>
                                       <path
                                          d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                                       </path>
                                    </svg>Processing
                                 </button>



                                 {{-- hr --}}
                                 <hr style="width: 10%" />





                                 {{-- 3: completed --}}
                                 <button class="btn btn--sm px-4 rounded-1 fs-13 text-capitalize scale--3"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                       viewBox="0 0 16 16" class="bi bi-info-circle me-2" data-bs-toggle="tooltip"
                                       data-bss-tooltip="" data-bs-placement="bottom" title="Order has been completed">
                                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                       </path>
                                       <path
                                          d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
                                       </path>
                                    </svg>Completed
                                 </button>
                              </div>
                           </div>
                           {{-- end processingIndicator --}}
                        </div>
                     </div>
                     {{-- end tab --}}









                     {{-- ---------------------------------------------- --}}
                     {{-- ---------------------------------------------- --}}






                     {{-- 2: cancelTab --}}
                     <div class="tab-pane fade" role="tabpanel" id="cancelling-tab">
                        <div class="row g-0 align-items-end">


                           {{-- 1: refundBilll --}}
                           <div class="col-4 mb-4">
                              <label class="form-label form--label">Refund Bill No.</label>
                              <input type="text" class="form--input" />
                           </div>




                           {{-- 2: note --}}
                           <div class="col-9">
                              <label class="form-label form--label">Note about cancellation</label>
                              <textarea class="form--input form--textarea w-100"></textarea>
                           </div>



                           {{-- submitButton --}}
                           <div class="col-3 text-end align-self-end">
                              <button class="btn btn btn--outline-theme btn--outline-danger rounded-1 px-4 mb-1"
                                 type="button" data-bs-target="#confirm-modal" data-bs-toggle="modal">
                                 Confirm
                              </button>
                           </div>
                        </div>
                     </div>
                     {{-- endTab --}}




                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- statusWrapper --}}












      {{-- --------------------------------------------------------------- --}}
      {{-- --------------------------------------------------------------- --}}
      {{-- --------------------------------------------------------------- --}}
      {{-- --------------------------------------------------------------- --}}
      {{-- --------------------------------------------------------------- --}}
      {{-- --------------------------------------------------------------- --}}











      {{-- 2: paymentWrap --}}
      <div id="payment--wrap" class="mb-5">
         <div class="d-flex align-items-center justify-content-between mb-3 mt-4">


            {{-- subheading --}}
            <label class="form-label hr--label mb-0 fs-14">Payment</label>
            <hr class="w-100 my-0" />



            {{-- paymentMethod - dateTime --}}
            <label class="form-label text-center hr--label mb-0" s="" style="min-width: 160px">
               <span class="d-block mb-1 fw-bold">CyberPay</span>
               <span class="d-block mb-1">12 Sep 2023 - 10:00 PM</span>
            </label>

         </div>





         {{-- -------------------------------------------- --}}
         {{-- -------------------------------------------- --}}





         {{-- row --}}
         <div class="row g-0 justify-content-center" id="payment--overview">



            {{-- switchCurrency --}}
            <div class="col-12 text-center mb-3 pb-2">


               {{-- 1: SDN --}}
               <button class="btn btn--export btn--currency scale--3 px-4 active" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/sd.png')}}" />SDN</button>


               {{-- EUR --}}
               <button class="btn btn--export btn--currency scale--3 px-4 ms-2 d-none" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/euro.png')}}" />EUR</button>


               {{-- GBP --}}
               <button class="btn btn--export btn--currency scale--3 px-4 ms-2" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/uk.png')}}" />GBP
               </button>
            </div>




            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}





            {{-- productsPrice --}}
            <div class="col-2 text-center mb-4">
               <label class="col-form-label form--label profile--label scale--3">
                  <span class="profile--span-title one-line" style="line-height: initial">Products
                     Price</span>

                  <span class="fs-6 fw-bold">900</span>
               </label>
            </div>




            {{-- deliveryPrice --}}
            <div class="col-2 text-center mb-4">
               <label class="col-form-label form--label profile--label scale--3">
                  <span class="profile--span-title one-line" style="line-height: initial">Delivery
                     Price</span>

                  <span class="fs-6 fw-bold">250</span></label>
            </div>




            {{-- totalPrice --}}
            <div class="col-2 text-center mb-4">
               <label class="col-form-label text-center form--label profile--label scale--3">
                  <span class="profile--span-title one-line" style="line-height: initial">Total Price</span>
                  <span class="fs-6 fw-bold text-theme">1,150</span>
               </label>
            </div>

         </div>
         {{-- endRow --}}







         {{-- ------------------------------------- --}}
         {{-- ------------------------------------- --}}






         {{-- paymentRow --}}
         <div class="row g-0 justify-content-center" id="payment--local">
            <div class="col">
               <div class="tab--wrap">


                  {{-- tabLinks --}}
                  <ul class="nav nav-pills nav-justified" role="tablist">


                     {{-- 1: paid --}}
                     <li class="nav-item" role="presentation">
                        <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#paid-tab">Paid</a>
                     </li>


                     {{-- 2: notPaid --}}
                     <li class="nav-item" role="presentation">
                        <a class="nav-link" role="tab" data-bs-toggle="pill" href="#unpaid-tab">Not Paid</a>
                     </li>
                  </ul>






                  {{-- --------------------------- --}}
                  {{-- --------------------------- --}}





                  {{-- content --}}
                  <div class="tab-content">



                     {{-- 1: paid Tab --}}
                     <div class="tab-pane fade show active" role="tabpanel" id="paid-tab">
                        <div class="row">



                           {{-- information => paymentMethod --}}
                           <div class="col-1">
                              <button class="btn fs-3 btn--raw-icon scale--3" type="button">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-info-circle-fill" data-bs-toggle="tooltip"
                                    data-bss-tooltip="" data-bs-placement="bottom" style="fill: var(--bg-theme-dark)"
                                    title="CyberPay">
                                    <path
                                       d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                                    </path>
                                 </svg>
                              </button>
                           </div>






                           {{-- paymentMethod --}}
                           <div class="col-4">
                              <label class="form-label form--label">Payment Method</label>
                              <div class="select--single-wrapper">
                                 <select class="form--select">
                                    <option value=""></option>
                                    <option value="option">option</option>
                                 </select>
                              </div>
                           </div>




                           {{-- billNumber --}}
                           <div class="col-3">
                              <label class="form-label form--label">Bill No.</label>
                              <input type="text" class="form--input" />
                           </div>





                           {{-- submitButton --}}
                           <div class="col-4 text-end align-self-end">
                              <button class="btn btn--theme btn--submit rounded-1" type="button" style="width: 130px">
                                 Confirm
                              </button>
                           </div>

                        </div>
                     </div>
                     {{-- endTab --}}








                     {{-- --------------------------------------- --}}
                     {{-- --------------------------------------- --}}







                     {{-- 2: notPaid --}}
                     <div class="tab-pane fade" role="tabpanel" id="unpaid-tab">
                        <div class="row g-0">



                           {{-- note --}}
                           <div class="col-9 col-xxl-9">
                              <label class="form-label form--label">Note about action</label>
                              <textarea class="form--input form--textarea w-100"></textarea>
                           </div>



                           {{-- submitButton --}}
                           <div class="col-3 text-end align-self-end">
                              <button class="btn btn btn--outline-theme btn--outline-danger rounded-1 px-4 mb-1"
                                 type="button">
                                 Confirm
                              </button>
                           </div>
                        </div>
                     </div>
                     {{-- endTab --}}



                  </div>
               </div>
            </div>
         </div>
         {{-- endRow --}}






         {{-- --------------------------------------- --}}
         {{-- --------------------------------------- --}}




         {{-- :: globalPayment --}}
         <div class="row g-0 justify-content-center d-none" id="payment--global">


            {{-- 1: account --}}
            <div class="col-6">
               <label class="col-form-label text-center form--label profile--label scale--3 me-3">
                  <span class="fw-600 profile--span-title one-line" style="line-height: initial">Account
                     Owner</span>Aymen Sami Ahmed</label>
            </div>




            {{-- 2: billNumber --}}
            <div class="col-6">
               <label class="col-form-label text-center form--label profile--label scale--3 me-3">
                  <span class="fw-600 profile--span-title one-line" style="line-height: initial">Bill
                     No.</span>95014458192</label>
            </div>
         </div>



      </div>
      {{-- endPaymentWrap --}}











      {{-- ------------------------------------------------------- --}}
      {{-- ------------------------------------------------------- --}}
      {{-- ------------------------------------------------------- --}}
      {{-- ------------------------------------------------------- --}}
      {{-- ------------------------------------------------------- --}}










      {{-- 3: customerWrap --}}
      <div id="address--wrap">
         <div class="row g-0">


            {{-- subheading --}}
            <div class="col-12">
               <div class="row g-0 hr--subtitle">
                  <div class="col-10">
                     <hr />
                  </div>
                  <div class="col-2 text-center">
                     <h5>Customer</h5>
                  </div>
               </div>
            </div>







            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}








            {{-- customer --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Customer</label>
                  <p>
                     <a class="text-decoration-none text-theme" href="#">Khalid Omar Hassan</a>
                  </p>
               </div>
            </div>




            {{-- phone --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Phone</label>
                  <p>5019930189</p>
               </div>
            </div>




            {{-- country --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Country</label>
                  <p>United Kingdom</p>
               </div>
            </div>




            {{-- receiver (global) --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Receiver</label>
                  <p>
                     <a class="text-decoration-none text-theme" href="#">Yasir Ahmad Kamal</a>
                  </p>
               </div>
            </div>




            {{-- receiverPhone (global) --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Phone</label>
                  <p>999590002 - 9959281900</p>
               </div>
            </div>





            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}






            {{-- country --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Country</label>
                  <p>Khartoum, Sudan</p>
               </div>
            </div>




            {{-- address --}}
            <div class="col-12 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Rough Address</label>
                  <p>
                     loerm ipsum yusa repos tentaion herakulaniya fentaniya
                     osuymana hesu desu kupartik uyal niesaan kailabia
                     yestradustp mentaub subarp fatniyan stweeb to kusative
                     comperhensatniation funcatisant meusap<br />
                  </p>
               </div>
            </div>
         </div>
      </div>
      {{-- endAddressRow --}}





      {{-- -------------------------------------------------- --}}
      {{-- -------------------------------------------------- --}}








      {{-- resultsRow --}}
      <div id="results--row">
         <div class="row g-0 align-items-center results--header mb-2 active" id="results--header">



            {{-- subHeading --}}
            <div class="col-12">
               <div class="row g-0 hr--subtitle mt-4">
                  <div class="col-10">
                     <hr />
                  </div>
                  <div class="col-2 text-center">
                     <h5>Products</h5>
                  </div>
               </div>
            </div>






            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}






            {{-- headers --}}
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
         {{-- endRow --}}








         {{-- ------------------------------------- --}}
         {{-- ------------------------------------- --}}





         {{-- rows --}}
         <div class="row g-0 align-items-center results--item">


            {{-- 1: product --}}
            <div class="col-2">
               <label class="col-form-label form--label row--label">P-10503</label>
            </div>


            {{-- 2: name --}}
            <div class="col-4">
               <label class="col-form-label form--label row--label">Watermellon</label>
            </div>


            {{-- 3: quantity --}}
            <div class="col-2">
               <label class="col-form-label form--label row--label">2</label>
            </div>


            {{-- 4: pricePerOne --}}
            <div class="col-2">
               <label class="col-form-label form--label row--label">10</label>
            </div>



            {{-- 5: totalPrice --}}
            <div class="col-2">
               <label class="col-form-label form--label row--label">20</label>
            </div>
         </div>
         {{-- endRow --}}




      </div>
   </section>
   {{-- endSection --}}











</div>
{{-- endCol --}}