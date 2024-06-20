{{-- wrapper --}}
<div>




    {{-- storeForm --}}
    <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-4">
        <div class="row">



            {{-- subheading --}}
            <div class="col-12 mt-4">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Phone Numbers</h5>
                    </div>
                </div>
            </div>





            {{-- ----------------------------- --}}
            {{-- ----------------------------- --}}






            {{-- phone --}}
            <div class="col-4 mb-4">
                <label class="form-label form--label">Phone</label>
                <input class="form-control form--input" type="text" wire:model='instance.phone' pattern="[0-9]+"
                    required />
            </div>



            {{-- submitButton --}}
            <div class="col-6 align-self-end mb-4">
                <button class="btn btn--theme btn--submit rounded-1 mb-1" wire:loading.class='disabled'>
                    Save Number
                </button>
            </div>
        </div>
    </form>
    {{-- endForm --}}














    {{-- ----------------------------------------------- --}}
    {{-- ----------------------------------------------- --}}






    {{-- resultsRow --}}
    <div id="results--row">



        {{-- headers --}}
        @if ($phones->count() > 0)


        <div class="row g-0 align-items-center results--header mb-2" id="results--header">
            <div class="col-2">
                <label class="col-form-label form--label row--label">Serial</label>
            </div>
            <div class="col-9">
                <label class="col-form-label form--label row--label">Phone</label>
            </div>
            <div class="col-1">
                <label class="col-form-label form--label row--label"></label>
            </div>
        </div>


        @endif
        {{-- end if --}}




        {{-- -------------------- --}}
        {{-- -------------------- --}}





        {{-- loop - phones --}}
        @foreach ($phones ?? [] as $phone)


        <div class="row g-0 align-items-center results--item" key='single-phone-{{ $phone->id }}'>


            {{-- serial --}}
            <div class="col-2">
                <label class="col-form-label form--label row--label">PH-{{ $globalSNCounter++ }}</label>
            </div>





            {{-- phoneNumber --}}
            <div class="col-9">
                <label class="col-form-label form--label row--label">{{ $phone->phone }}</label>
            </div>






            {{-- removeAction --}}
            <div class="col-1">
                <div class="dropstart d-flex justify-content-center">
                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"></button>
                    <div class="dropdown-menu results--dropdown-menu">


                        {{-- 1: remove --}}
                        <a class="dropdown-item" href='javascript:void(0);'
                            wire:click="remove({{ $phone->id }})">Remove</a>
                    </div>
                </div>
            </div>



        </div>

        @endforeach
        {{-- end loop --}}





    </div>
    {{-- endResultsRow --}}







</div>
{{-- endWrapper --}}