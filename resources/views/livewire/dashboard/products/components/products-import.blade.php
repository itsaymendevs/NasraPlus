<div class="modal fade" role="dialog" tabindex="-1" id="import-modal" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <form wire:submit='import' wire:loading.class='disabled' class="modal-content">



            {{-- header --}}
            <div class="modal-header modal--header">
                <h4 class="modal-title fw-bold">Import</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- endHeader --}}






            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}





            {{-- modalBody --}}
            <div class="modal-body">
                <div class="row align-items-end">



                    {{-- 1: excel --}}
                    <div class="col-5 mb-4">
                        <label class="form-label form--label fw-500">Excel File
                            <i class="bi bi-info-circle-fill ms-1 text-theme" data-bs-toggle="tooltip"
                                data-bss-tooltip="" data-bs-placement="bottom" data-bs-html="true"
                                title="<h5 class='fw-semibold fs-11 text-white mt-2 text-decoration-underline'>Columns</h5><p class='text-start text-white mb-0 fs-10'>SN <br />Name <br />Name in Arabic <br />Company ID <br />Type ID <br />Buy Price <br />Sell Price <br />Offer Price <br />Weight / Size Option : <br />[Namefull - Fixed - Dynamic]<br />Weight / Size <br />Unit ID <br />no. Of Units <br />Quantity / Unit <br />Total Quantity <br />Maximum Quantity / Order <br />Description <br />Description in Arabic <br />Hide Product <br />Show on Home</p>"></i>
                        </label>

                        {{-- input --}}
                        <input type="file" class='form--file form-control form--input' wire:model='excelFile'
                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                            required>
                    </div>








                    {{-- 1: excel --}}
                    <div class="col-7 mb-4">
                        <label class="form-label form--label fw-500">Pictures
                            <i class="bi bi-info-circle-fill ms-1 text-theme" data-bs-toggle="tooltip"
                                data-bss-tooltip="" data-bs-html="true" data-bs-placement="bottom"
                                title="Pictures should have the same name as product's serial<br />(ex. P-10.png)"></i>
                        </label>

                        {{-- input --}}
                        <input type="file" class='form--file form-control form--input' wire:model='imageFiles'
                            accept="image/png" required multiple>
                    </div>




                </div>
            </div>
            {{-- endBody --}}







            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}





            {{-- submitButton --}}
            <div class="modal-footer">
                <button class="btn border-0 rounded-1" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn--theme btn--sm px-5 rounded-1" wire:loading.class='disabled'
                    wire:target='imageFiles, excelFile'=>Confirm</button>
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