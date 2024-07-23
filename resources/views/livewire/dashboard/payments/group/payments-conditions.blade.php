{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Payment Conditions</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.payments') }}" title='Payment Conditions' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- form --}}
        <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-5">
            <div class="row">



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
                    <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>
                        Save item
                    </button>
                </div>
            </div>
        </form>
        {{-- endForm --}}








        {{-- -------------------------------------------------- --}}
        {{-- -------------------------------------------------- --}}







        {{-- resultsRow --}}
        <div id="results--row">



            {{-- headers --}}

            @if ($conditions?->total() > 0)

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





            {{-- ---------------------- --}}
            {{-- ---------------------- --}}






            {{-- rows --}}
            @foreach ($conditions ?? [] as $condition)

            <div class="row g-0 align-items-center results--item" key='single-condition-{{ $condition->id }}'>

                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">PC-{{ $globalSNCounter++ }}</label>
                </div>



                {{-- 2: title --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">{{ $condition->title }}</label>
                </div>



                {{-- content --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">{{ $condition->content }}</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit --}}
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-target="#conditions-edit"
                                wire:click='edit({{ $condition->id }})' data-bs-toggle="modal">Edit</a>


                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='remove({{ $condition->id }})'>Remove</a>


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
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $conditions?->links() }}</div>
            </div>






        </div>
    </section>
    {{-- endSection --}}
























    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.payments.group.payments-conditions.components.payments-conditions-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}