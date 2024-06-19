<div class="modal fade" role="dialog" tabindex="-1" id="companies-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Company</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}




            {{-- ---------------------------- --}}
            {{-- ---------------------------- --}}






            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">



                    {{-- 1: name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" required wire:model='instance.name'>
                    </div>




                    {{-- 1.2: nameAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" required wire:model='instance.nameAr'>
                    </div>
                </div>
            </div>
            {{-- endBody --}}









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