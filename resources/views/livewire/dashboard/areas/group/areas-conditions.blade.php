{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Delivery Conditions</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.areas') }}" title='Delivery Conditions' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- form --}}
        <form class="form--page mb-5">
            <div class="row">



                {{-- title --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- titleAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Title
                        <span class="lang--span">العربية</span>
                    </label>

                    <input class="form-control form--input" type="text" />
                </div>






                {{-- content --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Content</label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>




                {{-- contentAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Content
                        <span class="lang--span">العربية</span>
                    </label>

                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>






                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
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





            {{-- ---------------------- --}}
            {{-- ---------------------- --}}






            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">

                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">SC-001</label>
                </div>



                {{-- 2: title --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Condition Title</label>
                </div>



                {{-- content --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Condition Content</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#conditions-edit" data-bs-toggle="modal">Edit
                                Condition</a>


                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="#">Remove Condition</a>
                        </div>
                    </div>
                </div>



            </div>
            {{-- endRows --}}



        </div>
    </section>
    {{-- endSection --}}
























    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.areas.group.areas-conditions.components.areas-conditions-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}