{{-- modal --}}
<div class="modal fade" role="dialog" tabindex="-1" id="sort-modal" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <form wire:submit='sort' wire:loading.class='disabled' class="modal-content">


            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Sorting</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>




            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}



            {{-- body --}}
            <div class="modal-body">
                <div class="row g-0 align-items-end">

                    <div class="col-12 mb-4">
                        <label class="form-label form--label">Sub-Category</label>
                        <div class="select--single-wrapper" wire:ignore>
                            <select class="form--select form--modal-select" data-modal='#sort-modal'
                                data-instance='subCategoryId'>
                                <option value=""></option>


                                {{-- loop - groupByCategory --}}
                                @foreach ($subCategories->groupBy('categoryId') ?? [] as $commonCategory =>
                                $subCategoriesByCategory)

                                <optgroup label="{{ $subCategoriesByCategory->first()->category->name }}">


                                    {{-- loop - subCategories --}}
                                    @foreach ($subCategoriesByCategory as $subCategory)

                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>

                                    @endforeach
                                    {{-- end loop --}}


                                </optgroup>


                                @endforeach
                                {{-- end loop - groupByCategory --}}


                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endBody --}}









            {{-- ------------------------------ --}}
            {{-- ------------------------------ --}}




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







    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}







</div>
{{-- endModal --}}