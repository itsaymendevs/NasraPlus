<div class="modal fade" role="dialog" tabindex="-1" id="sort-modal" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form wire:submit='sort' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Sorting</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}






            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}





            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row align-items-end">



                    {{-- 1: target --}}
                    <div class="col-12 mb-4">
                        <label class="form-label form--label">Target</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select form--modal-select" data-instance='target'
                                data-modal='#sort-modal'>
                                <option value=""></option>
                                <option value="Home Products">Home Products</option>
                                <option value="Category Products">Category Products</option>
                            </select>
                        </div>
                    </div>






                    {{-- -------------------------------- --}}
                    {{-- -------------------------------- --}}







                    {{-- category --}}
                    <div class="col-12 mb-4 @if ($target != 'Category Products') d-none @endif">
                        <label class="form-label form--label">Category</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select form--modal-select level--select level--one"
                                data-level='category' data-id='sort' data-instance='categoryId' data-clear='true'
                                data-modal='#sort-modal'>
                                <option value=""></option>


                                {{-- loop - categories --}}
                                @foreach ($categories ?? [] as $category)

                                <option value="{{ $category->id }}">{{ $category->name }}</option>

                                @endforeach
                                {{-- end loop --}}

                            </select>
                        </div>
                    </div>








                    {{-- subCategory --}}
                    <div class="col-12 mb-4 @if ($target != 'Category Products') d-none @endif">
                        <label class="form-label form--label">Sub Category</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select form--modal-select level--select level--two"
                                data-level='subCategory' data-id='sort' data-instance='subCategoryId' data-clear='true'
                                data-modal='#sort-modal'>
                            </select>
                        </div>
                    </div>







                    {{-- type --}}
                    <div class="col-12 mb-4 @if ($target != 'Category Products') d-none @endif">
                        <label class="form-label form--label">Type</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select form--modal-select level--select level--three" data-level='type'
                                data-instance='typeId' data-clear='true' data-id='sort' data-modal='#sort-modal'>
                            </select>
                        </div>
                    </div>



                </div>
            </div>
            {{-- endBody --}}







            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'>Sort</button>
            </div>
        </form>
    </div>
    {{-- endWrapper --}}





















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







    {{-- selectHandle --}}
    <script>
        $("#sort-modal .form--modal-select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         instance = $(this).attr('data-instance');


         @this.set(instance, selectValue);


      }); //end function
    </script>















    {{-- levelSelectHandle --}}
    <script>
        $("#sort-modal .level--select").on("change", function(event) {



         // 1.1: getValue - instance
         selectValue = $(this).select2('val');
         levelType = $(this).attr('data-level');
         levelId = $(this).attr('data-id');

         @this.levelSelect(levelType, selectValue, levelId);


      }); //end function
    </script>









    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}





</div>
{{-- endModal --}}