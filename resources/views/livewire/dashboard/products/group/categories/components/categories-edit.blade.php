<div class="modal fade" role="dialog" tabindex="-1" id="categories-edit" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Category</h4>
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
                        <div class="img--holder mx-auto"><img loading="lazy" /></div>
                    </div>



                    {{-- name --}}
                    <div class="col-12 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" />
                    </div>



                    {{-- nameAr --}}
                    <div class="col-12 mb-4">
                        <label class="form-label form--label ar">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" />
                    </div>
                </div>
            </div>
            {{-- endBody --}}







            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}






            {{-- submitFooter --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Update</button>
            </div>
            {{-- endFooter --}}


        </form>
    </div>
    {{-- endDialog --}}










</div>
{{-- endModal --}}