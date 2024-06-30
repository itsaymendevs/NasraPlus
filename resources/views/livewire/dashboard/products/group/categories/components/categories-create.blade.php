<div class="modal fade" role="dialog" tabindex="-1" id="categories-create" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form wire:submit='store' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">New Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}






            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}






            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-end">




                    {{-- imageFile --}}
                    <div class="col-12 mb-4">
                        <label class="img--holder mx-auto upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                            for="category--file-1" title="Click To Upload">




                            {{-- caption --}}
                            <span class="upload--caption badge">Picture</span>




                            {{-- input --}}
                            <input class="form-control d-none file--input" id="category--file-1" required
                                data-preview="category--preview-1" type="file" accept="image/*"
                                wire:model='instance.imageFile' />


                            {{-- preview --}}
                            <img class="inventory--image-frame" id="category--preview-1"
                                src="{{ url('assets/img/placeholder.png') }}" wire:ignore />


                        </label>
                    </div>






                    {{-- ------------------------------------- --}}
                    {{-- ------------------------------------- --}}







                    {{-- name --}}
                    <div class="col-12 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" required wire:model='instance.name' />
                    </div>



                    {{-- nameAr --}}
                    <div class="col-12 mb-4">
                        <label class="form-label form--label ar">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" required wire:model='instance.nameAr' />
                    </div>
                </div>
            </div>
            {{-- endBody --}}







            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}






            {{-- submitFooter --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'
                    wire:target='instance.imageFile, store'>Save</button>
            </div>
            {{-- endFooter --}}


        </form>
    </div>
    {{-- endDialog --}}










</div>
{{-- endModal --}}