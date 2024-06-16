<div class="modal fade" role="dialog" tabindex="-1" id="subCategories-create">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content">




            {{-- headers --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">New Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeaders --}}








            {{-- ---------------------------------------- --}}
            {{-- ---------------------------------------- --}}





            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">



                    {{-- 1: category --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Category</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select">
                                <option value=""></option>
                                <option value="option">option</option>
                            </select>
                        </div>
                    </div>



                    {{-- empty --}}
                    <div class="col-6 mb-4"></div>





                    {{-- name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input">
                    </div>



                    {{-- nameAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input">
                    </div>



                </div>
            </div>
            {{-- end modalBody --}}






            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Save</button>
            </div>




        </form>
    </div>
    {{-- endWrapper --}}









</div>
{{-- endModal --}}