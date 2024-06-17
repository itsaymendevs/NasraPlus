<div class="modal fade" role="dialog" tabindex="-1" id="advertisements-rectangle-edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">



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



                    {{-- 1: name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Advertisement Name</label>
                        <input type="text" class="form--input" />
                    </div>



                    {{-- empty --}}
                    <div class="col-6 mb-4"></div>




                    {{-- 2: imageFile --}}
                    <div class="col-6 align-self-end mb-4">
                        <label class="form-label form--label">Cover Picture</label>
                        <div class="img--holder for-rectangle-ads">
                            <img loading="lazy" />
                        </div>
                    </div>




                    {{-- 2.5: imageFileAr --}}
                    <div class="col-6 align-self-end mb-4">
                        <label class="form-label form--label">Cover Picture<span
                                class="lang--span">العربية</span></label>
                        <div class="img--holder for-rectangle-ads">
                            <img loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- endBody --}}








            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}






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