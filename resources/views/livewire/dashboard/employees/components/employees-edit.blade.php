<div class="modal fade" role="dialog" tabindex="-1" id="employees-edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Employee</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}





            {{-- ----------------------------------------- --}}
            {{-- ----------------------------------------- --}}





            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row g-0 align-items-center">


                    {{-- leftCol --}}
                    <div class="col-6 mb-4">


                        {{-- 1: name --}}
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input mb-4" value="Ahmed" />



                        {{-- 1.2: nameAr --}}
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" value="Ismail" />
                    </div>




                    {{-- ----------------------------- --}}
                    {{-- ----------------------------- --}}





                    {{-- rightCol --}}
                    <div class="col-6 align-self-end d-flex justify-content-around align-items-center mb-4 pb-2">


                        {{-- 1: lowPermission --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="formCheck-5" checked="" name="permission"
                                value="1" />
                            <label class="form-check-label" for="formCheck-5">Low Permission</label>
                        </div>



                        {{-- 2: highPermission --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="formCheck-6" name="permission"
                                value="2" /><label class="form-check-label" for="formCheck-6">High Permission</label>
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
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Update</button>
            </div>



        </div>
    </div>
    {{-- endWrapper --}}











</div>
{{-- endModal --}}