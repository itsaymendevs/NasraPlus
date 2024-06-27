<div class="modal fade" role="dialog" tabindex="-1" id="control-orders" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- headers --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Enable Orders</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>




            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}





            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row justify-content-center align-items-center">




                    {{-- subHeading --}}
                    <div class="col-12">
                        <div class="row justify-content-center g-0 hr--subtitle">
                            <div class="col-10">
                                <hr>
                            </div>
                        </div>
                    </div>





                    {{-- --------------------------------- --}}
                    {{-- --------------------------------- --}}






                    {{-- 1: isOrderingActive --}}
                    <div class="col-3 mb-4">
                        <div class="form-check form--checkbox d-flex">
                            <input class="form-check-input" type="checkbox" id="orderBlocking-checkbox-7"
                                wire:model='isOrderingActive' wire:loading.class='disabled'>
                            <label class="form-check-label" for="orderBlocking-checkbox-7">FOR ALL</label>
                        </div>
                    </div>





                    {{-- 1: Sudan --}}
                    <div class="col-3 mb-4">
                        <div class="form-check form--checkbox d-flex">
                            <input class="form-check-input" type="checkbox" id="orderBlocking-checkbox-4"
                                wire:model='isSDOrderingActive' wire:loading.class='disabled'>
                            <label class="form-check-label" for="orderBlocking-checkbox-4">SUDAN</label>
                        </div>
                    </div>




                    {{-- 2: Ireland --}}
                    <div class="col-3 mb-4">
                        <div class="form-check form--checkbox d-flex">
                            <input class="form-check-input" type="checkbox" id="orderBlocking-checkbox-6"
                                wire:model='isIRLOrderingActive' wire:loading.class='disabled'>
                            <label class="form-check-label" for="orderBlocking-checkbox-6">IRELAND</label>
                        </div>
                    </div>




                    {{-- 3: UK --}}
                    <div class="col-3 mb-4">
                        <div class="form-check form--checkbox d-flex">
                            <input class="form-check-input" type="checkbox" id="orderBlocking-checkbox-5"
                                wire:model='isUKOrderingActive' wire:loading.class='disabled'>
                            <label class="form-check-label" for="orderBlocking-checkbox-5">UNITED KINGDOM</label>
                        </div>
                    </div>


                </div>
            </div>
            {{-- endBody --}}







            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}






            {{-- footer --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>Update</button>
            </div>




        </form>
    </div>
</div>
{{-- endModal --}}