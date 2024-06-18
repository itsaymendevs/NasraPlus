{{-- wrapper --}}
<div>




    {{-- aboutForm --}}
    <form wire:submit='store' wire:loading.class='disabled' class="mb-5">
        <div class="row">



            {{-- subtitle --}}
            <div class="col-12" style="margin-top: 100px">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>About Nasra</h5>
                    </div>
                </div>
            </div>






            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}







            {{-- paragraphTitle --}}
            <div class="col-6 mb-4">
                <label class="form-label form--label">Paragraph Title</label>
                <input class="form-control form--input" type="text" required wire:model='instance.title' />
            </div>





            {{-- paragraphTitleAr--}}
            <div class="col-6 mb-4">
                <label class="form-label form--label">Paragraph Title
                    <span class="lang--span">العربية</span>
                </label>

                <input class="form-control form--input" type="text" required wire:model='instance.titleAr' />
            </div>







            {{-- content --}}
            <div class="col-6 mb-4">
                <label class="form-label form--label">Paragraph Content</label>
                <textarea class="form-control form--input form--textarea" required
                    wire:model='instance.content'></textarea>
            </div>




            {{-- contentAr --}}
            <div class="col-6 mb-4">
                <label class="form-label form--label">Paragraph Content
                    <span class="lang--span">العربية</span>
                </label>

                <textarea class="form-control form--input form--textarea" required
                    wire:model='instance.contentAr'></textarea>
            </div>






            {{-- submitButton --}}
            <div class="col-12 text-center mt-3">
                <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>
                    Save item
                </button>
            </div>
        </div>
    </form>
    {{-- endForm --}}













    {{-- ---------------------------------------------- --}}
    {{-- ---------------------------------------------- --}}





    {{-- resultsRow --}}
    <div id="results--row">


        {{-- headers --}}
        @if ($paragraphs?->total() > 0)


        <div class="row g-0 align-items-center results--header mb-2" id="results--header">
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







        {{-- --------------------------- --}}
        {{-- --------------------------- --}}





        {{-- rows --}}
        @foreach ($paragraphs ?? [] as $paragraph)



        <div class="row g-0 align-items-center results--item" key='single-paragraph-{{ $paragraph->id }}'>


            {{-- serial --}}
            <div class="col-2">
                <label class="col-form-label form--label row--label">AP-{{ $globalSNCounter++ }}</label>
            </div>



            {{-- title --}}
            <div class="col-4">
                <label class="col-form-label form--label row--label">{{ $paragraph->title }}</label>
            </div>



            {{-- content --}}
            <div class="col-5">
                <label class="col-form-label form--label row--label">{{ $paragraph->content }}</label>
            </div>







            {{-- actions --}}
            <div class="col-1">
                <div class="dropstart d-flex justify-content-center">
                    <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"></button>
                    <div class="dropdown-menu results--dropdown-menu">


                        {{-- 1: edit --}}
                        <a class="dropdown-item" href='javascript:void(0);' data-bs-target="#paragraphs-edit"
                            data-bs-toggle="modal" wire:click='edit({{ $paragraph->id }})'>Edit</a>


                        {{-- 2: remove --}}
                        <a class="dropdown-item" href="javascript:void(0);"
                            wire:click='remove({{ $paragraph->id }})'>Remove</a>

                    </div>
                </div>
            </div>
            {{-- endActions --}}


        </div>

        @endforeach
        {{-- end loop --}}









        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}






        {{-- paginations --}}
        <div class="row">
            <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $paragraphs?->links(data: ['scrollTo' => false]) }}</div>
        </div>





    </div>
    {{-- endResultsRow --}}
















</div>
{{-- endWrapper --}}