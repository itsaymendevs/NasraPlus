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
   <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div" class="header--div w-100"
      wire:ignore.self>



      <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
         leftLink="{{ route('dashboard.userProfile', [1]) }}" title='Customer Order' />


   </section>
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}








   {{-- section --}}
   <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">


      {{-- information --}}
      <div id="information--row" class="mb-5">
         <div class="row g-0 align-items-start">



            {{-- customer --}}
            <div class="col-6 mb-5">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Customer</label>
                  <p>
                     <a class="text-decoration-none text-theme" href="user.html">Ahmed Samir Husam</a>
                  </p>
               </div>
            </div>






            {{-- switchCurrency --}}
            <div class="col-6 text-center mb-5">

               {{-- 1: SDN --}}
               <button class="btn btn--export btn--currency scale--3 px-4 active" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/sd.png')}}" />SDN</button>


               {{-- 2: EUR --}}
               <button class="btn btn--export btn--currency scale--3 px-4 ms-2 d-none" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/euro.png')}}" />EUR</button>


               {{-- 2.5: GBP --}}
               <button class="btn btn--export btn--currency scale--3 px-4 ms-2" type="button">
                  <img class="me-2" src="{{url('assets/img/Flags/uk.png')}}" />GBP
               </button>

            </div>







            {{-- ---------------------------------------- --}}
            {{-- ---------------------------------------- --}}






            {{-- 1: receiver --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Receiver</label>
                  <p>
                     <a class="text-decoration-none text-theme" href="user.html">Yasir Ahmad Kamal</a>
                  </p>
               </div>
            </div>



            {{-- 2: orderNumber --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Order Number</label>
                  <p>12559010</p>
               </div>
            </div>


            {{-- 3: dateTime --}}
            <div class="col-4 text-center mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">DateTime</label>
                  <p>05 Sep 2023 - 10:00 PM</p>
               </div>
            </div>






            {{-- 4: methodOfReciption --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Method &amp; place of receipt</label>
                  <p>Collection - Nasra Omdurman in ocobus<br /></p>
               </div>
            </div>





            {{-- 5: receipt --}}
            <div class="col-2 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Receipt</label>
                  <p>924D19885</p>
               </div>
            </div>




            {{-- 6: deliveryPrice --}}
            <div class="col-2 mb-4 d-none">
               <label class="col-form-label form--label profile--label scale--3"><span
                     class="fw-600 profile--span-title one-line" style="line-height: initial">Delivery
                     Price</span>180
               </label>
            </div>





            {{-- 7: status --}}
            <div class="col-2 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Status</label>
                  <p>Completed</p>
               </div>
            </div>





            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}






            {{-- paymentEmployee --}}
            <div class="col-4 text-center mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Ahmad Omar</label>
                  <p>05 Sep 2023 - 10:10 PM</p>
               </div>
            </div>



            {{-- paymentMethod --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Payment Method</label>
                  <p>Stripe</p>
               </div>
            </div>




            {{-- invoiceNumber --}}
            <div class="col-2 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Bill Number</label>
                  <p>10297910</p>
               </div>
            </div>



            {{-- status --}}
            <div class="col-2 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Status</label>
                  <p>Paid</p>
               </div>
            </div>







            {{-- ------------------------------------------ --}}
            {{-- ------------------------------------------ --}}






            {{-- refundEmployee --}}
            <div class="col-4 text-center mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">----</label>
                  <p>05 Sep 2023 - 10:03 PM<br /></p>
               </div>
            </div>



            {{-- refundMethod --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Refund Method</label>
                  <p>Cash</p>
               </div>
            </div>





            {{-- refundStatus --}}
            <div class="col-4 mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title">Status</label>
                  <p></p>
               </div>
            </div>



            {{-- empty --}}
            <div class="col-4 text-center mb-4">
               <div class="profile--title-wrap">
                  <label class="form-label profile--span-title"></label>
                  <p></p>
               </div>
            </div>





            {{-- empty --}}
            <div class="col-12 mb-4"></div>





            {{-- -------------------------------------------------- --}}
            {{-- -------------------------------------------------- --}}




            {{-- totals --}}



            {{-- totalProducts --}}
            <div class="col-4 text-center mb-4">
               <label class="form-label form--label profile--label scale--3">Total Products</label>
               <h4 class="mt-2 mb-0 fw-bold">112</h4>
            </div>




            {{-- productsPrice --}}
            <div class="col-3 offset-1 text-center mb-4">
               <label class="form-label form--label profile--label scale--3">Products Price</label>
               <h4 class="mt-2 mb-0 fw-bold text-theme">24,500</h4>
            </div>




            {{-- totalPrice --}}
            <div class="col-3 text-center mb-4">
               <label class="form-label form--label profile--label scale--3">Total Price</label>
               <h4 class="mt-2 mb-0 fw-bold text-theme">100,000</h4>
            </div>
         </div>
      </div>
      {{-- endRow --}}











      {{-- ------------------------------------ --}}
      {{-- ------------------------------------ --}}







      {{-- resultsRow --}}
      <div id="results--row">



         {{-- headers --}}
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





         {{-- ---------------------------------- --}}
         {{-- ---------------------------------- --}}





         {{-- rows --}}
         <div class="row g-0 align-items-center results--item">
            <div class="col-2">
               <label class="col-form-label form--label row--label">P-10503</label>
            </div>
            <div class="col-4">
               <label class="col-form-label form--label row--label">Watermellon</label>
            </div>
            <div class="col-2">
               <label class="col-form-label form--label row--label">2</label>
            </div>
            <div class="col-2">
               <label class="col-form-label form--label row--label">10</label>
            </div>
            <div class="col-2">
               <label class="col-form-label form--label row--label">20</label>
            </div>
         </div>
         {{-- endRows --}}




      </div>
   </section>
   {{-- endSection --}}








</div>
{{-- endCol --}}