<div class="modal fade" role="dialog" tabindex="-1" id="employees-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">





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
                        <input type="text" class="form--input mb-4" required wire:model='instance.name' />



                        {{-- 1.2: nameAr --}}
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" required wire:model='instance.nameAr' />
                    </div>






                    {{-- ----------------------------- --}}
                    {{-- ----------------------------- --}}







                    {{-- rightCol --}}
                    <div class="col-6 align-self-end d-flex justify-content-around align-items-center mb-4 pb-2">




                        {{-- 1: lowPermission --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="permission-checkbox-3"
                                value="Low Permission" wire:model='instance.permission' />
                            <label class="form-check-label" for="permission-checkbox-3">Low Permission</label>
                        </div>




                        {{-- 2: highPermission --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="permission-checkbox-4"
                                wire:model='instance.permission' value="High Permission" />
                            <label class="form-check-label" for="permission-checkbox-4">High Permission</label>
                        </div>


                    </div>
                    {{-- endPermission --}}



                </div>
            </div>
            {{-- endBody --}}





            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}






            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>Update</button>
            </div>



        </form>
    </div>
    {{-- endWrapper --}}











</div>
{{-- endModal --}}