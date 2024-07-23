<div class="modal fade" role="dialog" tabindex="-1" id="payments-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Payment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>





            {{-- --------------------------- --}}
            {{-- --------------------------- --}}







            {{-- body --}}
            <div class="modal-body">
                <div class="row">




                    {{-- paymentType --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Type</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select id='type-select-2' class="form--select form--modal-select"
                                data-instance='instance.type' data-modal='#payments-edit'>
                                <option value=""></option>

                                @foreach ($types ?? [] as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>






                    {{-- empty --}}
                    <div class="col-6"></div>







                    {{-- --------------------------------- --}}
                    {{-- --------------------------------- --}}





                    {{-- titles --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" required wire:model='instance.name'>
                    </div>




                    {{-- titleAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>

                        <input type="text" class="form--input" required wire:model='instance.nameAr'>
                    </div>







                    {{-- ------------------------------- --}}
                    {{-- ------------------------------- --}}









                    {{-- accountName (hidden) --}}
                    <div class="col-6 mb-4 d-none">
                        <label class="form-label form--label">Account Name</label>
                        <input type="text" class="form--input" wire:model='instance.accountName'>
                    </div>




                    {{-- accountNumber (hidden) --}}
                    <div class="col-6 mb-4 d-none">
                        <label class="form-label form--label">Account Number</label>
                        <input type="text" class="form--input" wire:model='instance.accountNumber'>
                    </div>







                    {{-- ------------------------------- --}}
                    {{-- ------------------------------- --}}






                    {{-- toggleBox --}}



                    {{-- 1: forDelivery --}}
                    <div class="col-4 text-center mb-4 mt-3">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="isFor-4"
                                wire:model='instance.isForDelivery' />
                            <label class="form-check-label" for="isFor-4">For Delivery</label>
                        </div>
                    </div>





                    {{-- 2: forPickup --}}
                    <div class="col-4 text-center mb-4 mt-3">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="isFor-5"
                                wire:model='instance.isForPickup' />
                            <label class="form-check-label" for="isFor-5">For Pickup</label>
                        </div>
                    </div>






                    {{-- 3: forRefund --}}
                    <div class="col-4 text-center mb-4 mt-3">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="isFor-6"
                                wire:model='instance.isForRefund' />

                            <label class="form-check-label" for="isFor-6">For Refund</label>
                        </div>
                    </div>



                </div>
            </div>
            {{-- endBody --}}










            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>Update</button>
            </div>

        </form>
    </div>
    {{-- endWrapper --}}


















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- select-handle --}}
    <script>
        $("#payments-edit .form--modal-select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>







    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}













</div>
{{-- endModal --}}