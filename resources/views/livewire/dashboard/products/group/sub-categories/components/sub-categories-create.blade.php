<div class="modal fade" role="dialog" tabindex="-1" id="subCategories-create" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='store' wire:loading.class='disabled' class="modal-content">




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
                            <select class="form--select form--modal-select" data-instance='instance.categoryId'
                                data-modal='#subCategories-create' required>
                                <option value=""></option>

                                @foreach ($categories ?? [] as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>




                    {{-- empty --}}
                    <div class="col-6 mb-4"></div>







                    {{-- ---------------------------------- --}}
                    {{-- ---------------------------------- --}}







                    {{-- name --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name</label>
                        <input type="text" class="form--input" required wire:model='instance.name'>
                    </div>



                    {{-- nameAr --}}
                    <div class="col-6 mb-4">
                        <label class="form-label form--label">Name
                            <span class="lang--span">العربية</span>
                        </label>
                        <input type="text" class="form--input" required wire:model='instance.nameAr'>
                    </div>



                </div>
            </div>
            {{-- end modalBody --}}







            {{-- ------------------------------------- --}}
            {{-- ------------------------------------- --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>Save</button>
            </div>




        </form>
    </div>
    {{-- endWrapper --}}





















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- selectHandle --}}
    <script>
        $("#subCategories-create .form--modal-select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>







    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}









</div>
{{-- endModal --}}