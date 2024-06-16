<div class="modal fade" role="dialog" tabindex="-1" id="units-create" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">


            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">New Unit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}








            {{-- ------------------------------------------- --}}
            {{-- ------------------------------------------- --}}






            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">


                    {{-- name --}}
                    <div class="col-7 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" />
                    </div>


                    {{-- abbreviation --}}
                    <div class="col-5 mb-4">
                        <label class="form-label form--label">Abbreviation</label>
                        <input type="text" class="form--input w-100" />
                    </div>




                    {{-- nameAr --}}
                    <div class="col-7 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" />
                    </div>




                    {{-- abbreviationAr --}}
                    <div class="col-5 mb-4">
                        <label class="form-label form--label">Abbreviation
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input w-100" />
                    </div>
                </div>
            </div>
            {{-- endBody --}}








            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Save</button>
            </div>

        </div>
    </div>
    {{-- endWrapper --}}










</div>
{{-- endModal --}}