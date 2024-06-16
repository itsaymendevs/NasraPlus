<div class="modal fade" role="dialog" tabindex="-1" id="types-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">


            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Type</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}






            {{-- -------------------------------------- --}}
            {{-- -------------------------------------- --}}





            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row align-items-center">


                    {{-- 1: category --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Category</label>
                        <div class="select--single-wrapper">
                            <select class="form--select">
                                <option value=""></option>
                                <option value="option">option</option>
                            </select>
                        </div>
                    </div>






                    {{-- 1.2: subCategory --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Sub Category</label>
                        <div class="select--single-wrapper">
                            <select class="form--select">
                                <option value=""></option>
                                <option value="option">option</option>
                            </select>
                        </div>
                    </div>




                    {{-- 1.3: name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input">
                    </div>



                    {{-- 1.4: nameAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input">
                    </div>
                </div>
            </div>
            {{-- endBody --}}








            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Update</button>
            </div>



        </div>
    </div>
    {{-- endWrapper --}}












</div>
{{-- endModal --}}