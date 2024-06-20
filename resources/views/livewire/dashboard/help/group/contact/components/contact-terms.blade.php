{{-- wrapper --}}
<div>




    {{-- termsForm --}}
    <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-5">
        <div class="row">




            {{-- subheading --}}
            <div class="col-12" style="margin-top: 80px">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Terms &amp; Conditions</h5>
                    </div>
                </div>
            </div>





            {{-- ------------------------ --}}
            {{-- ------------------------ --}}





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





            {{-- submitButton --}}
            <div class="col-12 text-center mt-3">
                <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>Save Term</button>
            </div>



        </div>
    </form>
    {{-- endForm --}}












    {{-- ------------------------------------- --}}
    {{-- ------------------------------------- --}}





    {{-- resultsRow --}}

    <div id="results--row-1" class="mb-5">



        {{-- headers --}}
        @if ($terms->count() > 0)

        <div class="row g-0 align-items-center results--header mb-2" id="results--header-1">
            <div class="col-2">
                <label class="col-form-label form--label row--label">Serial</label>
            </div>
            <div class="col-4">
                <label class="col-form-label form--label row--label">Title</label>
            </div>
            <div class="col-5">
                <label class="col-form-label form--label row--label">Content</label>
            </div>
            <div class="col-1">
                <label class="col-form-label form--label row--label"></label>
            </div>
        </div>

        @endif
        {{-- end if --}}






        {{-- -------------------------- --}}
        {{-- -------------------------- --}}





        {{-- loop - terms --}}
        @foreach ($terms ?? [] as $term)


        <div class="row g-0 align-items-center results--item" key='single-term-{{ $term->id }}'>



            {{-- serial --}}
            <div class="col-2">
                <label class="col-form-label form--label row--label">T-{{ $globalSNCounter++ }}</label>
            </div>



            {{-- title --}}
            <div class="col-4">
                <label class="col-form-label form--label row--label">{{ $term->title }}</label>
            </div>



            {{-- content --}}
            <div class="col-5">
                <label class="col-form-label form--label row--label">{{ $term->content }}</label>
            </div>







            {{-- actions --}}
            <div class="col-1">
                <div class="dropstart d-flex justify-content-center">
                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"></button>
                    <div class="dropdown-menu results--dropdown-menu">



                        {{-- 1: edit --}}
                        <a class="dropdown-item" data-bs-target="#terms-edit" data-bs-toggle="modal"
                            wire:click='edit({{ $term->id }})'>Edit</a>



                        {{-- 2: remove --}}
                        <a class="dropdown-item" href="javascript:void(0);"
                            wire:click='remove({{ $term->id }})'>Remove</a>
                    </div>
                </div>
            </div>



        </div>

        @endforeach
        {{-- endRows --}}




    </div>
    {{-- end resultsWrapper --}}



</div>
{{-- endWrapper --}}