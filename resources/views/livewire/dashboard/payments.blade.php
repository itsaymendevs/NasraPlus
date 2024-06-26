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



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
            leftLink="{{ route('dashboard.orders') }}" title='Payment Methods' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>
        <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-5">
            <div class="row">



                {{-- 1: title --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.name' />
                </div>



                {{-- 2: titleAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title
                        <span class="lang--span">العربية</span>
                    </label>

                    <input class="form-control form--input" type="text" required wire:model='instance.nameAr' />
                </div>






                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}




                {{-- 3: paymentTypes --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Payment Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select" required data-instance='instance.type'>
                            <option value=""></option>

                            @foreach ($types ?? [] as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>





                {{-- 4: accountName --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Account Name</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.accountName' />
                </div>






                {{-- 5: accountNumber --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Account Number</label>
                    <input class="form-control form--input" type="text" required wire:model='instance.accountNumber' />
                </div>





                {{-- 6: togglers --}}




                {{-- 1: forDelivery --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="isFor-1"
                            wire:model='instance.isForDelivery' />
                        <label class="form-check-label" for="isFor-1">For Delivery</label>
                    </div>
                </div>





                {{-- 2: forPickup --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="isFor-2"
                            wire:model='instance.isForPickup' />
                        <label class="form-check-label" for="isFor-2">For Pickup</label>
                    </div>
                </div>






                {{-- 3: forRefund --}}
                <div class="col-4 text-center mb-4 mt-2">
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="isFor-3"
                            wire:model='instance.isForRefund' />
                        <label class="form-check-label" for="isFor-3">For Refund</label>
                    </div>
                </div>







                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>
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
            @if ($payments?->total() > 0)


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


            @endif
            {{-- end if --}}






            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}







            {{-- loop - payments --}}
            @foreach ($payments ?? [] as $payment)


            <div class="row g-0 align-items-center results--item" key='single-payment-{{ $payment->id }}'>



                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">SC-{{ $globalSNCounter++ }}</label>
                </div>


                {{-- 2: type --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $payment->type }}</label>
                </div>


                {{-- 3: accountName --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $payment->name }}</label>
                </div>



                {{-- 4: accountNumber --}}
                <div class="col-3">
                    <label class="col-form-label form--label row--label">{{ $payment->accountNumber }}</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu small">



                            {{-- 1: edit --}}
                            <a class="dropdown-item" href='javascript:void(0);' data-bs-target="#payments-edit"
                                wire:click='edit({{ $payment->id }})' data-bs-toggle="modal">Edit</a>





                            {{-- 2: toggleActive --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='toggleActive({{ $payment->id }})'>
                                @if ($payment->isActive) Disable @else Enable @endif
                            </a>



                            {{-- 3: remove --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='remove({{ $payment->id }})'>Remove</a>


                        </div>
                    </div>
                </div>
                {{-- endActions --}}


            </div>

            @endforeach
            {{-- end loop --}}









            {{-- ---------------------------------- --}}
            {{-- ---------------------------------- --}}






            {{-- paginations --}}
            <div class="row">
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $payments?->links() }}</div>
            </div>






        </div>
    </section>
    {{-- endSection --}}

















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








    {{-- select-handle --}}
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