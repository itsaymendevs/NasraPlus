{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Contact - United Kingdom</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Contact - United Kingdom' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}







    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- toggleWrap --}}
        <div id="disable--wrap" class="mb-5">
            <div class="row g-0 align-items-end">



                {{-- 1: serviceActive --}}
                <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" />
                        <label class="form-check-label ms-1" for="formCheck-1">Activate service in UK</label>
                    </div>
                </div>






                {{-- 2: toSDG [Except SD] --}}
                <div class="col-8">
                    <div class="d-flex justify-content-end align-items-center">


                        {{-- countryCurrency --}}
                        <img class="flag--icon" src="{{asset('assets/img/Flags/uk.png')}}" />
                        <h6 class="mb-0 ms-2 me-3 fw-bold">1 GBP =</h6>


                        {{-- input --}}
                        <input type="text" class="form--input flag--input text-center fw-bold" value="900" />



                        {{-- SDCurrency --}}
                        <h6 class="mb-0 ms-3 me-2 fw-bold">SDG</h6>
                        <img class="flag--icon" src="{{asset('assets/img/Flags/sd.png')}}" />

                    </div>
                </div>
            </div>
        </div>
        {{-- endWrapper --}}












        {{-- ---------------------------------------------- --}}
        {{-- ---------------------------------------------- --}}







        {{-- contactForm --}}
        <form class="form--page mb-5">
            <div class="row">


                {{-- email --}}
                <div class="col-8 mb-4">
                    <label class="form-label form--label">Email Address</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- empty --}}
                <div class="col-4 mb-4"></div>



                {{-- whatsapp --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Whatsapp</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- whatsappURL --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Whatsapp URL</label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- submitButton --}}
                <div class="col-4 align-self-end mb-4">
                    <button class="btn btn--theme btn--submit rounded-1 mb-1" type="button">
                        Save Changes
                    </button>
                </div>
            </div>
        </form>
        {{-- endForm --}}












        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}







        {{-- phoneForm --}}
        <form class="form--page mb-4">
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




                {{-- phone --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Phone</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- submitButton --}}
                <div class="col-6 align-self-end mb-4">
                    <button class="btn btn--theme btn--submit rounded-1 mb-1" type="button">
                        Save item
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






            {{-- -------------------- --}}
            {{-- -------------------- --}}





            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">PH-001</label>
                </div>



                {{-- phoneNumber --}}
                <div class="col-9">
                    <label class="col-form-label form--label row--label">66 905611</label>
                </div>



                {{-- removeAction --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">
                            <a class="dropdown-item" href="#">Remove Phone</a>
                        </div>
                    </div>
                </div>



            </div>
            {{-- endRows --}}


        </div>
        {{-- endResultsRow --}}












        {{-- -------------------------------------------------- --}}
        {{-- -------------------------------------------------- --}}









        {{-- termsForm --}}
        <form class="form--page mb-5">
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
                    <button class="btn btn--theme btn--submit rounded-1" type="button">Save Item</button>
                </div>
            </div>
        </form>
        {{-- endForm --}}












        {{-- ------------------------------------- --}}
        {{-- ------------------------------------- --}}





        {{-- resultsRow --}}
        <div id="results--row-1" class="mb-5">



            {{-- headers --}}
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





            {{-- -------------------------- --}}
            {{-- -------------------------- --}}





            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">T-001</label>
                </div>



                {{-- title --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Terms Title</label>
                </div>



                {{-- content --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Terms Content</label>
                </div>



                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">



                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#terms-edit" data-bs-toggle="modal">Edit
                                Terms</a>



                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="#">Remove Terms</a>
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
    <livewire:dashboard.help.group.contact.components.contact-terms-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}