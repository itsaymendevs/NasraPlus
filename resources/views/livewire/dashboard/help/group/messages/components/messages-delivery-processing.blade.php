<div class="accordion-item results--order results--sms">




    {{-- header --}}
    <h2 class="accordion-header" role="tab">
        <button class="accordion-button collapsed results--order-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#results--sms-delivery .item-1" aria-expanded="false"
            aria-controls="results--sms-delivery .item-1">
            <span style="width: 50%">Processing</span>

            <small class="tag--optional w-100 text-end me-3" style="color: var(--bg-theme-dark)">optional</small>
        </button>
    </h2>







    {{-- --------------------- --}}
    {{-- --------------------- --}}






    {{-- content --}}
    <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel" data-bs-parent="#results--sms-delivery"
        wire:ignore.self>
        <div class="accordion-body">
            <form wire:submit='update' wire:loading.class='disabled' class="row">




                {{-- keywords --}}


                {{-- orderNumber --}}
                <div class="col-4 text-center mb-4">
                    <label class="form-label form--label text-theme fs-12 mb-1">@orderNum</label>
                    <label class="form-label form--label profile--label">Order Number</label>
                </div>





                {{-- firstName --}}
                <div class="col-4 text-center mb-4">
                    <label class="form-label form--label text-theme fs-12 mb-1">@userFN</label><label
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
                    <label class="form-label form--label with-counter">
                        <span class='invisible'>Message</span>
                        <small class="tag--optional">{{ strlen($instance->content ?? '') }} / 140</small>
                    </label>

                    <textarea class="form--input form--textarea" wire:model.live='instance.content'
                        placeholder="English Text"></textarea>
                </div>





                {{-- messageAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label with-counter">
                        <span class='invisible'>Message in Arabic</span>
                        <small class="tag--optional">{{ strlen($instance->contentAr ?? '') }} / 140</small>
                    </label>

                    <textarea class="form--input form--textarea" wire:model.live='instance.contentAr'
                        placeholder="Arabic Text"></textarea>
                </div>




                {{-- submitButton --}}
                <div class="col-12 text-center mb-2">
                    <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                        wire:loading.class='disabled'>Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
{{-- endWrapper --}}