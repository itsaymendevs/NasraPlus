<div class="accordion-item results--order results--sms">


    {{-- headers --}}
    <h2 class="accordion-header" role="tab">
        <button class="accordion-button collapsed results--order-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#results--sms-collection .item-2" aria-expanded="false"
            aria-controls="results--sms-collection .item-2" wire:ignore.self>
            <span style="width: 50%">Canceled</span>
            <span class="text-end" style="width: 40%"><small
                    class="sms--indicator @if (!$instance->isActive) inactive @endif">User</small><small
                    class="sms--indicator @if (!$instanceReceiver->isActive) inactive @endif">Receiver</small></span>
        </button>
    </h2>






    {{-- -------------------------------- --}}
    {{-- -------------------------------- --}}






    {{-- content --}}
    <div class="accordion-collapse collapse item-2 pt-2" role="tabpanel" data-bs-parent="#results--sms-collection"
        wire:ignore.self>
        <div class="accordion-body">
            <div class="row">




                {{-- keywords --}}




                {{-- orderNumber --}}
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





                {{-- receiver --}}
                <div class="col-4 text-center mb-4">
                    <label class="form-label form--label text-theme fs-12 mb-1">@receiver</label>
                    <label class="form-label form--label profile--label">Order Receiver</label>
                </div>




                {{-- receiver --}}
                <div class="col-4 text-center mb-4">
                    <label class="form-label form--label text-theme fs-12 mb-1">@pickupCode</label>
                    <label class="form-label form--label profile--label">Pickup Code</label>
                </div>






                {{-- ------------------------------ --}}
                {{-- ------------------------------ --}}





                {{-- tabWrap --}}
                <div class="col-12">
                    <div class="tab--wrap">



                        {{-- tabLinks --}}
                        <ul class="nav nav-pills nav-justified" role="tablist" wire:ignore>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#user-tab-6">User</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" role="tab" data-bs-toggle="pill" href="#receiver-tab-6">Receiver</a>
                            </li>
                        </ul>






                        {{-- ------------------------------- --}}
                        {{-- ------------------------------- --}}







                        {{-- tabContent --}}
                        <div class="tab-content pb-0">


                            {{-- 1: user --}}
                            <div class="tab-pane active" role="tabpanel" id="user-tab-6" wire:ignore.self>
                                <form wire:submit='update' wire:loading.class='disabled' class="row align-items-center">


                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">
                                            <span class='invisible'>Message</span>
                                            <small class="tag--optional">{{ strlen($instance->content ?? '') }} /
                                                140</small>
                                        </label>

                                        <textarea class="form--input form--textarea" wire:model.live='instance.content'
                                            placeholder="English Text" required></textarea>
                                    </div>





                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">
                                            <span class='invisible'>Message in Arabic</span>
                                            <small class="tag--optional">{{ strlen($instance->contentAr ?? '') }} /
                                                140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"
                                            wire:model.live='instance.contentAr' required
                                            placeholder="Arabic Text"></textarea>
                                    </div>






                                    {{-- ---------------------------------- --}}
                                    {{-- ---------------------------------- --}}






                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">

                                        {{-- 1: toggleActive --}}
                                        <button
                                            class="btn btn--outline-theme btn--sm fs-12 rounded-1 px-5 @if ($instance->isActive) btn--outline-danger @endif"
                                            type='button' wire:click='toggleActive' wire:loading.class='disabled'>
                                            @if ($instance->isActive) Disable @else Enable @endif
                                        </button>


                                        {{-- 2: submitButton --}}
                                        <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                            wire:loading.class='disabled'>Save</button>
                                    </div>




                                </form>
                            </div>
                            {{-- end Tab --}}







                            {{-- ------------------------- --}}
                            {{-- ------------------------- --}}





                            {{-- 2: receiver --}}
                            <div class="tab-pane" role="tabpanel" id="receiver-tab-6" wire:ignore.self>
                                <form wire:submit='updateReceiver' wire:loading.class='disabled'
                                    class="row align-items-center">



                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">
                                            <span class='invisible'>Message</span>
                                            <small class="tag--optional">{{ strlen($instanceReceiver->content ?? '') }}
                                                / 140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"
                                            wire:model.live='instanceReceiver.content'
                                            placeholder="English Text"></textarea>
                                    </div>





                                    {{-- messageAr --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">
                                            <span class='invisible'>Message in Arabic</span>
                                            <small class="tag--optional">{{ strlen($instanceReceiver->contentAr ?? '')
                                                }} / 140</small>
                                        </label>

                                        <textarea class="form--input form--textarea"
                                            wire:model.live='instanceReceiver.contentAr'
                                            placeholder="Arabic Text"></textarea>
                                    </div>






                                    {{-- ---------------------------------- --}}
                                    {{-- ---------------------------------- --}}






                                    {{-- actions --}}
                                    <div class="col-12 text-center mb-2">

                                        {{-- 1: toggleActive --}}
                                        <button
                                            class="btn btn--outline-theme btn--sm fs-12 rounded-1 px-5 @if ($instanceReceiver->isActive) btn--outline-danger @endif"
                                            type='button' wire:click='toggleReceiverActive'
                                            wire:loading.class='disabled'>
                                            @if ($instanceReceiver->isActive) Disable @else Enable @endif
                                        </button>


                                        {{-- 2: submitButton --}}
                                        <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5 ms-2"
                                            wire:loading.class='disabled'>Save</button>
                                    </div>




                                </form>
                            </div>
                            {{-- endTab --}}





                        </div>
                        {{-- end tabContent --}}


                    </div>
                </div>
                {{-- end tabsWrap --}}



            </div>
        </div>
    </div>
</div>
{{-- end item --}}