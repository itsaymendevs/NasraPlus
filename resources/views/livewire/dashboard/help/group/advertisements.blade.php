{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Advertisements</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Advertisements' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}











    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">




        {{-- 1: rectangleForm --}}
        <form class="form--page mb-5">
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






                {{-- name --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Advertisement Name</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- isActive --}}
                <div class="col-6 text-center align-self-end mb-4 pb-3">
                    <div class="form-check form-switch form--switch xl">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" checked="" />
                        <label class="form-check-label ps-2" for="formCheck-1">Show Advertisement</label>
                    </div>
                </div>





                {{-- ----------------------------------- --}}
                {{-- ----------------------------------- --}}






                {{-- imageFile --}}
                <div class="col-6 align-self-end mt-4">
                    <label class="form-label form--label">Cover Picture</label>
                    <div class="img--holder for-rectangle-ads">
                        <img loading="lazy" />
                    </div>
                </div>



                {{-- imageFileAr --}}
                <div class="col-6 align-self-end mt-4">
                    <label class="form-label form--label">Cover Picture
                        <span class="lang--span">العربية</span>
                    </label>

                    <div class="img--holder for-rectangle-ads">
                        <img loading="lazy" />
                    </div>
                </div>













                {{-- ----------------------------------- --}}
                {{-- ----------------------------------- --}}






                {{-- submitButton --}}
                <div class="col-12 text-center mt-5">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save Ad
                    </button>
                </div>


            </div>
        </form>
        {{-- endForm --}}









        {{-- ------------------------------------------------- --}}
        {{-- ------------------------------------------------- --}}







        {{-- resultsRow --}}
        <div id="results--row" class="mb-5 pb-5">


            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-9">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
            </div>




            {{-- ------------------------ --}}
            {{-- ------------------------ --}}





            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">AD-001</label>
                </div>



                {{-- 2: title --}}
                <div class="col-9">
                    <label class="col-form-label form--label row--label">AD Title</label>
                </div>






                {{-- action --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">

                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#advertisements-rectangle-edit"
                                data-bs-toggle="modal">Edit
                                Condition</a>



                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="#">Remove Condition</a>
                        </div>
                    </div>
                </div>


            </div>
            {{-- endRows --}}



        </div>
        {{-- end resultsRow --}}









        {{-- ----------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------- --}}












        {{-- 2: squareAdsForm --}}
        <form class="form--page mb-5">
            <div class="row">



                {{-- subHeading --}}
                <div class="col-12">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr />
                        </div>
                        <div class="col-3">
                            <h5>Square Ads</h5>
                        </div>
                    </div>
                </div>





                {{-- -------------------------------------- --}}
                {{-- -------------------------------------- --}}










                {{-- name --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Advertisement Name</label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- toggleActive --}}
                <div class="col-6 text-center align-self-end mb-4 pb-3">
                    <div class="form-check form-switch form--switch xl">
                        <input class="form-check-input" type="checkbox" id="formCheck-2" checked="" />
                        <label class="form-check-label ps-2" for="formCheck-2">Show Advertisement</label>
                    </div>
                </div>






                {{-- imageFile --}}
                <div class="col-6 align-self-end mt-4">
                    <label class="form-label form--label">Cover Picture</label>
                    <div class="img--holder for-square-ads">
                        <img loading="lazy" />
                    </div>
                </div>




                {{-- imageFileAr --}}
                <div class="col-6 align-self-end mt-4">
                    <label class="form-label form--label">Cover Picture
                        <span class="lang--span">العربية</span>
                    </label>
                    <div class="img--holder for-square-ads">
                        <img loading="lazy" />
                    </div>
                </div>







                {{-- submitButton --}}
                <div class="col-12 text-center mt-5">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save Ad
                    </button>
                </div>
            </div>
        </form>
        {{-- endForm --}}










        {{-- ---------------------------------------- --}}
        {{-- ---------------------------------------- --}}







        {{-- resultRow --}}
        <div id="results--row-1" class="mb-5">


            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header-1">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-9">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
            </div>





            {{-- ---------------------- --}}
            {{-- ---------------------- --}}






            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">AD-001</label>
                </div>



                {{-- 2: name --}}
                <div class="col-9">
                    <label class="col-form-label form--label row--label">AD Title</label>
                </div>





                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">



                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#advertisements-square-edit"
                                data-bs-toggle="modal">Edit
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
    <livewire:dashboard.help.group.advertisements.components.advertisements-square-edit />


    {{-- 2: edit --}}
    <livewire:dashboard.help.group.advertisements.components.advertisements-rectangle-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}