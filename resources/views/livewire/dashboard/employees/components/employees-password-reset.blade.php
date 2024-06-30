<div class="modal fade" role="dialog" tabindex="-1" id="employees-password-reset" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Reset Password</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}





            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}





            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">


                    {{-- 1: adminPassword --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Admin Password</label>
                        <input type="password" class="form--input" wire:model='password' required />
                    </div>



                    {{-- 2: resetPassword --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">New Password</label>
                        <input type="password" class="form--input" wire:model='newPassword' minlength="6" required />
                    </div>



                </div>
            </div>
            {{-- endBody --}}







            {{-- --------------------------------------- --}}
            {{-- --------------------------------------- --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>RESET</button>
            </div>

        </form>
    </div>
    {{-- endWrapper --}}







</div>
{{-- endModal --}}