{{-- globalAddress --}}
<form wire:submit='update' wire:loading.class='disabled' class="mb-5">
    <div class="row">



        {{-- subtitle --}}
        <div class="col-12" style="margin-top: 100px">
            <div class="row g-0 hr--subtitle">
                <div class="col-9">
                    <hr />
                </div>
                <div class="col-3">
                    <h5>Global Address</h5>
                </div>
            </div>
        </div>






        {{-- --------------------------------- --}}
        {{-- --------------------------------- --}}






        {{-- leftCol --}}
        <div class="col-6 mb-5">










            {{-- isActive --}}
            <div class="d-block mb-4">

                <div class="form-check form-switch form--switch w-100 justify-content-center">
                    <input class="form-check-input" type="checkbox" id="address-checkbox-1"
                        wire:model='instance.isActive' @if ($instance->isActive) checked @endif />
                    <label class="form-check-label fs-6" for="address-checkbox-1">Show Global Address on
                        Application</label>
                </div>

            </div>








            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}




            {{-- imageFile --}}
            <label class="img--holder for-store upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                for="about--file" title="Click To Upload">




                {{-- caption --}}
                <span class="upload--caption badge">Picture</span>




                {{-- input --}}
                <input class="form-control d-none file--input" id="about--file" data-preview="about--preview"
                    type="file" wire:model='instance.imageFile' />


                {{-- preview --}}
                <img class="inventory--image-frame" id="about--preview" src="{{ asset('assets/img/placeholder.png') }}"
                    wire:ignore />


            </label>








        </div>
        {{-- end leftCol --}}










        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}







        {{-- rightCol --}}
        <div class="col-6 mb-4">
            <div class="row">



                {{-- address --}}
                <div class="col-12 mb-4">
                    <label class="form-label form--label">Address</label>
                    <textarea class="form-control form--input form--textarea" wire:model='instance.address'></textarea>
                </div>


                {{-- latitude --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Latitude</label>
                    <input class="form-control form--input" type="text" wire:model='instance.latitude' />
                </div>



                {{-- longitude --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Longitude</label>
                    <input class="form-control form--input" type="text" wire:model='instance.longitude' />
                </div>






                {{-- ------------------------ --}}
                {{-- ------------------------ --}}



                {{-- submitButton --}}
                <div class="d-block text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>Save
                        Address</button>
                </div>


            </div>
        </div>
        {{-- end rightCol --}}





    </div>
</form>
{{-- endForm --}}