{{-- wrapper --}}
<div class="accordion-item results--order results--sms">



    {{-- headers --}}
    <h2 class="accordion-header" role="tab">
        <button class="accordion-button collapsed results--order-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#results--sms-delivery .item-4" aria-expanded="false"
            aria-controls="results--sms-delivery .item-4" wire:ignore.self>
            <span style="width: 50%">Confirm Receiption</span>
            <span class="text-end" style="width: 40%"><small
                    class="sms--indicator @if (!$instanceReceiver->isActive) inactive @endif">Receiver</small></span>
        </button>
    </h2>
    {{-- endHeader --}}








    {{-- ----------------------------- --}}
    {{-- ----------------------------- --}}






    {{-- content --}}
    <div class="accordion-collapse collapse item-4 pt-2" role="tabpanel" data-bs-parent="#results--sms-delivery"
        wire:ignore.self>
        <div class="accordion-body">
            <form wire:submit='updateReceiver' wire:loading.class='disabled' class="row">




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
                    <label class="form-label form--label with-counter">
                        <span class='invisible'>Message</span>
                        <small class="tag--optional">{{ strlen($instanceReceiver->content ?? '') }} / 140</small>
                    </label>

                    <textarea class="form--input form--textarea" wire:model.live='instanceReceiver.content'
                        placeholder="English Text" required></textarea>
                </div>





                {{-- messageAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label with-counter">
                        <span class='invisible'>Message in Arabic</span>
                        <small class="tag--optional">{{ strlen($instanceReceiver->contentAr ?? '') }} / 140</small>
                    </label>

                    <textarea class="form--input form--textarea" wire:model.live='instanceReceiver.contentAr'
                        placeholder="Arabic Text" required></textarea>
                </div>






                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}






                {{-- actions --}}
                <div class="col-12 text-center mb-2">

                    {{-- 1: toggleActive --}}
                    <button class="btn btn--outline-theme btn--sm fs-12 rounded-1 px-5
                      @if ($instanceReceiver->isActive) btn--outline-danger @endif" type='button'
                        wire:click='toggleReceiverActive' wire:loading.class='disabled'>
                        @if ($instanceReceiver->isActive) Disable @else Enable @endif
                    </button>


                    {{-- 2: submitButton --}}
                    <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                        wire:loading.class='disabled'>Save</button>
                </div>


            </form>
        </div>
    </div>
</div>
{{-- endWrapper --}}