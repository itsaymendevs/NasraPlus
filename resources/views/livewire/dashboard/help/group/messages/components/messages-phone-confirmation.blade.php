<div class="col-12">
    <div class="accordion mb-5" role="tablist" id="results--sms-phone">
        <div class="accordion-item results--order results--sms">




            {{-- header --}}
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed results--order-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#results--sms-phone .item-1" aria-expanded="false"
                    aria-controls="results--sms-phone .item-1">
                    <span>Phone Confirmation</span>
                </button>
            </h2>





            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}





            {{-- content --}}
            <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel" data-bs-parent="#results--sms-phone"
                wire:ignore.self>
                <div class="accordion-body">
                    <form wire:submit='update' wire:loading.class='disabled' class="row">




                        {{-- keywords --}}
                        <div class="col-12 text-center mb-4">


                            {{-- 1: verCode --}}
                            <label class="form-label form--label text-theme fs-12 mb-1">@verCode</label>

                            <label class="form-label form--label profile--label">Verification Code</label>
                        </div>







                        {{-- ----------------------- --}}
                        {{-- ----------------------- --}}







                        {{-- messages --}}
                        <div class="col-6 mb-4">
                            <label class="form-label form--label with-counter">
                                <span class='invisible'>Message</span>
                                <small class="tag--optional">{{ strlen($instance->content ?? '') }} / 140</small>
                            </label>

                            <textarea class="form--input form--textarea" wire:model.live='instance.content' required
                                placeholder="English Text"></textarea>
                        </div>





                        {{-- messagesAr --}}
                        <div class="col-6 mb-4">
                            <label class="form-label form--label with-counter">
                                <span class='invisible'>Message in Arabic</span>
                                <small class="tag--optional">{{ strlen($instance->contentAr ?? '') }} / 140</small>
                            </label>

                            <textarea class="form--input form--textarea" wire:model.live='instance.contentAr' required
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
            {{-- endContent --}}


        </div>
    </div>
</div>
{{-- endCol --}}