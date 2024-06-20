<div class="modal fade" role="dialog" tabindex="-1" id="terms-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='update' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Term</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}






            {{-- ---------------------------------------- --}}
            {{-- ---------------------------------------- --}}





            {{-- body --}}
            <div class="modal-body">
                <div class="row align-items-center">


                    {{-- title --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title</label>
                        <input class="form-control form--input" type="text" required wire:model='instance.title' />
                    </div>





                    {{-- titleAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title
                            <span class="lang--span">العربية</span>
                        </label>

                        <input class="form-control form--input" type="text" required wire:model='instance.titleAr' />
                    </div>






                    {{-- content --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Content</label>
                        <textarea class="form-control form--input form--textarea" required
                            wire:model='instance.content'></textarea>
                    </div>



                    {{-- contentAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Content
                            <span class="lang--span">العربية</span>
                        </label>

                        <textarea class="form-control form--input form--textarea" required
                            wire:model='instance.contentAr'></textarea>
                    </div>



                </div>
            </div>
            {{-- endBody --}}










            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:looading.class='disabled'>Update</button>
            </div>



        </form>
    </div>
    {{-- endWrapper --}}




</div>
{{-- endModal --}}