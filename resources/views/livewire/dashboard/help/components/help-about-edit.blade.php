<div class="modal fade" role="dialog" tabindex="-1" id="paragraphs-edit" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">



            {{-- headers --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Edit Paragraph</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeaders --}}






            {{-- -------------------------------- --}}
            {{-- -------------------------------- --}}






            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row align-items-center">


                    {{-- title --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title</label>
                        <input type="text" class="form--input" value="Paragraph Title" />
                    </div>




                    {{-- titleAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Title
                            <span class="lang--span">العربية</span>
                        </label>

                        <input type="text" class="form--input w-100" value="عنوان الفقرة" />
                    </div>



                    {{-- content --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Content</label>
                        <input type="text" class="form--input" value="Paragraph Content" />
                    </div>



                    {{-- contentAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Content
                            <span class="lang--span">العربية</span>
                        </label>

                        <input type="text" class="form--input w-100" value="محتوى الفقرة" />
                    </div>
                </div>
            </div>
            {{-- endBody --}}









            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">
                    Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" type="button">Update</button>
            </div>



        </div>
    </div>
    {{-- endWrapper --}}



</div>
{{-- endModal --}}