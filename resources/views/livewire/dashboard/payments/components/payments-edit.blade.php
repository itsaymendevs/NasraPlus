<div class="modal fade" role="dialog" tabindex="-1" id="payments-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">



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



                    {{-- titles --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title</label>
                        <input type="text" class="form--input">
                    </div>




                    {{-- titleAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title
                            <span class="lang--span">العربية</span>
                        </label>

                        <input type="text" class="form--input">
                    </div>







                    {{-- ------------------------------- --}}
                    {{-- ------------------------------- --}}





                    {{-- paymentType --}}
                    <div class="col-4 mb-4">
                        <label class="form-label form--label">Payment Type</label>
                        <div class="select--single-wrapper">
                            <select class="form--select">
                                <option value=""></option>
                                <option value="option">option</option>
                            </select>
                        </div>
                    </div>








                    {{-- accountName --}}
                    <div class="col-4 mb-4">
                        <label class="form-label form--label">Account Name</label>
                        <input type="text" class="form--input">
                    </div>




                    {{-- accountNumber --}}
                    <div class="col-4 mb-4">
                        <label class="form-label form--label">Account Number</label>
                        <input type="text" class="form--input">
                    </div>





                    {{-- ------------------------------- --}}
                    {{-- ------------------------------- --}}






                    {{-- toggleBox --}}



                    {{-- 1: forDelivery --}}
                    <div class="col-4 text-center mb-4 mt-2">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="formCheck-4">
                            <label class="form-check-label" for="formCheck-4">For Delivery</label>
                        </div>
                    </div>




                    {{-- 2: forPickup --}}
                    <div class="col-4 text-center mb-4 mt-2">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="formCheck-5">
                            <label class="form-check-label" for="formCheck-5">For Pickup</label>
                        </div>
                    </div>




                    {{-- 3: forRefund --}}
                    <div class="col-4 text-center mb-4 mt-2">
                        <div class="form-check form--checkbox">
                            <input class="form-check-input" type="checkbox" id="formCheck-6">
                            <label class="form-check-label" for="formCheck-6">For Refund</label>
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
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Update</button>
            </div>

        </div>
    </div>
    {{-- endWrapper --}}


















</div>
{{-- endModal --}}