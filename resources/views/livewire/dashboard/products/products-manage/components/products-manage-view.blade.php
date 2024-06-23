{{-- row --}}
<div class="row align-items-center results--item mx-0" key='single-product-{{ $instance->id }}'>


    {{-- 1: serial --}}
    <div class="col-2">
        <label class="col-form-label form--label row--label">P-{{ $counter + 1 }}</label>
    </div>


    {{-- 2: name --}}
    <div class="col-3">
        <label class="col-form-label form--label row--label me-1">{{ $instance->name }}</label>
    </div>


    {{-- 3: sellingPrice --}}
    <div class="col-2">
        <input type="number" class="form--input in-row" min="0" step="0.01" wire:model='instance.sellPrice' required
            wire:change='update' wire:loading.class='disabled' />
    </div>



    {{-- 4: offerPrice--}}
    <div class="col-2">
        <input type="number" class="form--input in-row" min="0" step="0.01" wire:model='instance.offerPrice'
            wire:change='update' required wire:loading.class='disabled' />
    </div>





    {{-- 5: quantity --}}
    <div class="col-2">
        <input type="number" class="form--input in-row" min="0" step="0.01" wire:model='instance.quantity'
            wire:change='update' required wire:loading.class='disabled' />
    </div>





    {{-- 6: actions --}}
    <div class="col-1">
        <div class="dropstart d-flex justify-content-center">
            <button class="btn dropdown-toggle results--dropdown" aria-expanded="false" data-bs-toggle="dropdown"
                type="button"></button>
            <div class="dropdown-menu results--dropdown-menu">

                {{-- 1: editProduct --}}
                <a class="dropdown-item" target='_blank'
                    href="{{ route('dashboard.editProduct', [$instance->id]) }}">Edit</a>

            </div>
        </div>
    </div>


</div>
{{-- endRow --}}