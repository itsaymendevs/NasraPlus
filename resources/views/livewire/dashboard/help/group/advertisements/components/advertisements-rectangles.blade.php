{{-- wrapper --}}
<div>




    {{-- 1: rectangleForm --}}
    <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-5">
        <div class="row">




            {{-- subheading --}}
            <div class="col-12">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Rectangle Ads</h5>
                    </div>
                </div>
            </div>





            {{-- -------------------------------- --}}
            {{-- -------------------------------- --}}





            {{-- name --}}
            <div class="col-6 mb-4">
                <label class="form-label form--label">Advertisement Name</label>
                <input class="form-control form--input" type="text" required wire:model='instance.name' />
            </div>



            {{-- isActive --}}
            <div class="col-6 text-center align-self-end mb-4 pb-3">
                <div class="form-check form-switch form--switch xl">
                    <input class="form-check-input" type="checkbox" id="rectangle-isActive-1"
                        wire:model='instance.isActive' />
                    <label class="form-check-label ps-2" for="rectangle-isActive-1">Show Advertisement</label>
                </div>
            </div>





            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}






            {{-- imageFile --}}
            <div class="col-6 align-self-end mt-4">
                <label class="img--holder for-rectangle-ads upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                    for="rectangle--file-1" title="Click To Upload">




                    {{-- caption --}}
                    <span class="upload--caption badge">English Cover</span>




                    {{-- input --}}
                    <input class="form-control d-none file--input" id="rectangle--file-1"
                        data-preview="rectangle--preview-1" type="file" accept="image/*" wire:model='instance.imageFile'
                        required />


                    {{-- preview --}}
                    <img class="inventory--image-frame" id="rectangle--preview-1"
                        src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                </label>
            </div>








            {{-- imageFileAr --}}
            <div class="col-6 align-self-end mt-4">
                <label class="img--holder for-rectangle-ads upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                    for="rectangle--file-2" title="Click To Upload">




                    {{-- caption --}}
                    <span class="upload--caption badge">Arabic Cover</span>




                    {{-- input --}}
                    <input class="form-control d-none file--input" id="rectangle--file-2"
                        data-preview="rectangle--preview-2" accept="image/*" type="file"
                        wire:model='instance.imageFileAr' required />


                    {{-- preview --}}
                    <img class="inventory--image-frame" id="rectangle--preview-2"
                        src="{{ asset('assets/img/placeholder.png') }}" wire:ignore />


                </label>
            </div>













            {{-- ----------------------------------- --}}
            {{-- ----------------------------------- --}}






            {{-- submitButton --}}
            <div class="col-12 text-center mt-5">
                <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'
                    wire:target='instance.imageFile, instance.imageFileAr, store'>
                    Save Ad
                </button>
            </div>


        </div>
    </form>
    {{-- endForm --}}









    {{-- ------------------------------------------------- --}}
    {{-- ------------------------------------------------- --}}







    {{-- resultsRow --}}
    <div id="results--row" class="mb-5 pb-4">


        {{-- headers --}}
        @if ($ads->total() > 0)


        <div class="row g-0 align-items-center results--header mb-2" id="results--header">
            <div class="col-2">
                <label class="col-form-label form--label row--label">Serial</label>
            </div>
            <div class="col-9">
                <label class="col-form-label form--label row--label">Name</label>
            </div>
        </div>


        @endif
        {{-- end if --}}





        {{-- ------------------------ --}}
        {{-- ------------------------ --}}







        {{-- loop - advertisements --}}
        @foreach ($ads ?? [] as $ad)

        <div class="row g-0 align-items-center results--item" key='rectangle-ad-{{ $ad->id }}'>


            {{-- 1: serial --}}
            <div class="col-2">
                <label class="col-form-label form--label row--label">AD-{{ $globalSNCounter++ }}</label>
            </div>



            {{-- 2: title --}}
            <div class="col-9">
                <label class="col-form-label form--label row--label">{{ $ad->name }}</label>
            </div>






            {{-- action --}}
            <div class="col-1">
                <div class="dropstart d-flex justify-content-center">
                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"></button>
                    <div class="dropdown-menu results--dropdown-menu">

                        {{-- 1: edit --}}
                        <a class="dropdown-item" href='javascript:void(0);'
                            data-bs-target="#advertisements-rectangle-edit" data-bs-toggle="modal"
                            wire:click='edit({{ $ad->id }})'>Edit</a>



                        {{-- 2: remove --}}
                        <a class="dropdown-item" href="javascript:void(0);"
                            wire:click='remove({{ $ad->id }})'>Remove</a>
                    </div>
                </div>
            </div>


        </div>

        @endforeach
        {{-- end loop --}}







        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}






        {{-- paginations --}}
        <div class="row">
            <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $ads?->links(data: ['scrollTo' => false]) }}</div>
        </div>






    </div>
    {{-- end resultsRow --}}



</div>
{{-- endWrapper --}}