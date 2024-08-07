{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Delivery Times</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.regions') }}" title='Delivery Times' />


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




                {{-- content --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Delivery Time</label>
                    <textarea class="form-control form--input form--textarea" required
                        wire:model='instance.content'></textarea>
                </div>




                {{-- contentAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Delivery Time
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

            @if ($deliveryTimes?->total() > 0)

            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-9">
                    <label class="col-form-label form--label row--label">Timing</label>
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
            @foreach ($deliveryTimes ?? [] as $deliveryTime)


            <div class="row g-0 align-items-center results--item" key='single-time-{{ $deliveryTime->id }}'>

                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">DT-{{ $globalSNCounter++ }}</label>
                </div>




                {{-- content --}}
                <div class="col-9">
                    <label class="col-form-label form--label row--label">{{ $deliveryTime->content }}</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit --}}
                            <a class="dropdown-item" href="javascript:void(0);" data-bs-target="#times-edit"
                                wire:click='edit({{ $deliveryTime->id }})' data-bs-toggle="modal">Edit</a>


                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="javascript:void(0);"
                                wire:click='remove({{ $deliveryTime->id }})'>Remove</a>


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
                <div class="col-12 mt-3 mb-5 pagination--wrap">{{ $deliveryTimes?->links() }}</div>
            </div>






        </div>
    </section>
    {{-- endSection --}}

























    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.regions.group.regions-times.components.regions-times-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}