<div class="accordion-item results--order results--sms">


    {{-- headers --}}
    <h2 class="accordion-header" role="tab">
        <button class="accordion-button collapsed results--order-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#results--sms-delivery .item-1" aria-expanded="false"
            aria-controls="results--sms-delivery .item-1" wire:ignore.self>
            <span style="width: 50%">Processing</span>
            <span class="text-end" style="width: 40%"><small
                    class="sms--indicator @if (!$instance->isActive) inactive @endif">User</small></span>
        </button>
    </h2>






    {{-- -------------------------------- --}}
    {{-- -------------------------------- --}}






    {{-- content --}}
    <div class="accordion-collapse collapse item-1 pt-2" role="tabpanel" data-bs-parent="#results--sms-delivery"
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






                {{-- ------------------------------ --}}
                {{-- ------------------------------ --}}





                {{-- tabWrap --}}
                <div class="col-12">
                    <div class="tab--wrap">



                        {{-- tabLinks --}}
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" role="tab" data-bs-toggle="pill" href="#user-tab-1">User</a>
                            </li>
                            <li class="nav-item d-none" role="presentation">
                                <a class="nav-link" role="tab" data-bs-toggle="pill" href="#receiver-tab-1">Receiver</a>
                            </li>
                        </ul>






                        {{-- ------------------------------- --}}
                        {{-- ------------------------------- --}}







                        {{-- tabContent --}}
                        <div class="tab-content pb-0">


                            {{-- 1: user --}}
                            <div class="tab-pane active" role="tabpanel" id="user-tab-1">
                                <form wire:submit='update' wire:loading.class='disabled' class="row align-items-center">


                                    {{-- message --}}
                                    <div class="col-6 mb-4">
                                        <label class="form-label form--label with-counter">
                                            <span class='invisible'>Message</span>
                                            <small class="tag--optional">{{ strlen($instance->content ?? '') }} /
                                                140</small>
                                        </label>

                                        <textarea class="form--input form--textarea" wire:model.live='instance.content'
                                            required placeholder="English Text"></textarea>
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




                                    {{-- submitButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
                                            wire:loading.class='disabled'>Save</button>
                                    </div>


                                </form>
                            </div>
                            {{-- end Tab --}}







                            {{-- ------------------------- --}}
                            {{-- ------------------------- --}}





                            {{-- 2: receiver --}}
                            <div class="tab-pane" role="tabpanel" id="receiver-tab-1">
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




                                    {{-- submitButton --}}
                                    <div class="col-12 text-center mb-2">
                                        <button class="btn btn--theme btn--sm fs-12 rounded-1 px-5"
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