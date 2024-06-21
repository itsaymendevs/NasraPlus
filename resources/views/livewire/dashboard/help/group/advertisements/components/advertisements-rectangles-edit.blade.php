<div class="modal fade" role="dialog" tabindex="-1" id="advertisements-rectangle-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Advertisement</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>






            {{-- ------------------------------- --}}
            {{-- ------------------------------- --}}






            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">



                    {{-- name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Advertisement Name</label>
                        <input class="form-control form--input" type="text" required wire:model='instance.name' />
                    </div>



                    {{-- isActive --}}
                    <div class="col-6 text-center align-self-end mb-4 pb-3">
                        <div class="form-check form-switch form--switch xl">
                            <input class="form-check-input" type="checkbox" id="rectangle-isActive-2"
                                wire:model='instance.isActive' />
                            <label class="form-check-label ps-2" for="rectangle-isActive-2">Show Advertisement</label>
                        </div>
                    </div>





                    {{-- ----------------------------------- --}}
                    {{-- ----------------------------------- --}}






                    {{-- imageFile --}}
                    <div class="col-6 align-self-end mt-4 mb-4">
                        <label class="img--holder for-rectangle-ads upload--wrap" data-bs-toggle="tooltip"
                            data-bss-tooltip="" for="rectangle--file-3" title="Click To Upload">




                            {{-- caption --}}
                            <span class="upload--caption badge">English Cover</span>




                            {{-- input --}}
                            <input class="form-control d-none file--input" id="rectangle--file-3"
                                data-preview="rectangle--preview-3" type="file" accept="image/*"
                                wire:model='instance.imageFile' />


                            {{-- preview --}}
                            <img class="inventory--image-frame" id="rectangle--preview-3"
                                src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                        </label>
                    </div>








                    {{-- imageFileAr --}}
                    <div class="col-6 align-self-end mt-4 mb-4">
                        <label class="img--holder for-rectangle-ads upload--wrap" data-bs-toggle="tooltip"
                            data-bss-tooltip="" for="rectangle--file-4" title="Click To Upload">




                            {{-- caption --}}
                            <span class="upload--caption badge">Arabic Cover</span>




                            {{-- input --}}
                            <input class="form-control d-none file--input" id="rectangle--file-4"
                                data-preview="rectangle--preview-4" accept="image/*" type="file"
                                wire:model='instance.imageFileAr' />


                            {{-- preview --}}
                            <img class="inventory--image-frame" id="rectangle--preview-4"
                                src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                        </label>
                    </div>



                </div>
            </div>
            {{-- endBody --}}








            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}






            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'
                    wire:target='update, instance.imageFile, instance.imageFileAr'>Update</button>
            </div>



        </form>
    </div>
    {{-- endWrapper --}}












</div>
{{-- endModal --}}