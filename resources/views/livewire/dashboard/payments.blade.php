{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Payment Methods</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Payment Methods' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
        <form class="form--page mb-5">
            <div class="row">



                {{-- 1: title --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- 2: titleAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title
                        <span class="lang--span">العربية</span>
                    </label>

                    <input class="form-control form--input" type="text" />
                </div>






                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}




                {{-- 3: paymentTypes --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Payment Type</label>
                    <div class="select--single-wrapper">
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- 4: accountName --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Account Name</label>
                    <input class="form-control form--input" type="text" />
                </div>






                {{-- 5: accountNumber --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Account Number</label>
                    <input class="form-control form--input" type="text" />
                </div>





                {{-- 6: togglers --}}




                {{-- 1: forDelivery --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" />
                        <label class="form-check-label" for="formCheck-1">For Delivery</label>
                    </div>
                </div>





                {{-- 2: forPickup --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-2" />
                        <label class="form-check-label" for="formCheck-2">For Pickup</label>
                    </div>
                </div>






                {{-- 3: forRefund --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-3" />
                        <label class="form-check-label" for="formCheck-3">For Refund</label>
                    </div>
                </div>







                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save Method
                    </button>
                </div>
            </div>
        </form>
        {{-- endForm --}}











        {{-- --------------------------------------------- --}}
        {{-- --------------------------------------------- --}}









        {{-- resutlsRow --}}
        <div id="results--row">



            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Type</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Account Number</label>
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
                    <label class="col-form-label form--label row--label">SC-001</label>
                </div>


                {{-- 2: type --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">At Receiving Payment</label>
                </div>


                {{-- 3: accountName --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">Bankak</label>
                </div>



                {{-- 4: accountNumber --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">1305590</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu small">


                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#payments-edit" data-bs-toggle="modal">Edit</a>


                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="#">Disable</a><a class="dropdown-item" href="#">Remove</a>
                        </div>
                    </div>
                </div>
                {{-- endActions --}}


            </div>
        </div>
    </section>
    {{-- endSection --}}
















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}











    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.payments.components.payments-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}