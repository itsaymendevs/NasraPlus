{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Help Details</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Help Details' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}







    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">


        {{-- 1: socialLinks --}}


        {{-- socialForm --}}
        <form class="form--page">
            <div class="row">



                {{-- subheading --}}
                <div class="col-12">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr />
                        </div>
                        <div class="col-3">
                            <h5>Media info</h5>
                        </div>
                    </div>
                </div>






                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}






                {{-- 1: websiteURL --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Website URL</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- empty --}}
                <div class="col-6 mb-4"></div>






                {{-- facebookProfile --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Facebook Profile ID</label><input
                        class="form-control form--input" type="text" />
                </div>




                {{-- facebookURL --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Facebook URL</label>
                    <input class="form-control form--input" type="text" />
                </div>






                {{-- linkedInProfile --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">LinkedIn Profile ID</label>
                    <input class="form-control form--input" type="text" />
                </div>


                {{-- linkedinURL --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">LinkedIn URL</label>
                    <input class="form-control form--input" type="text" />
                </div>





                {{-- twitterProfile --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Twitter Profile ID</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- twitterURL --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Twitter URL</label>
                    <input class="form-control form--input" type="text" />
                </div>







                {{-- instaProfile --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Instagram Profile ID</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- instaURL --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Instagram URL</label>
                    <input class="form-control form--input" type="text" />
                </div>







                {{-- ---------------------------------- --}}
                {{-- ---------------------------------- --}}




                {{-- applicationVideo --}}




                {{-- subtitle --}}
                <div class="col-12 mt-4">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr />
                        </div>
                        <div class="col-3">
                            <h5>Application Video</h5>
                        </div>
                    </div>
                </div>





                {{-- videoTitle --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Video Title</label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- videoTitleAr --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Video Title
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- videoURL --}}
                <div class="col-4 mb-4">
                    <label class="form-label form--label">Video URL</label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">Save Information</button>
                </div>

            </div>
        </form>
        {{-- endForm --}}














        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}




        {{-- 2: address --}}



        {{-- globalAddress --}}
        <form class="mb-5">
            <div class="row">



                {{-- subtitle --}}
                <div class="col-12" style="margin-top: 100px">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr />
                        </div>
                        <div class="col-3">
                            <h5>Global Address</h5>
                        </div>
                    </div>
                </div>





                {{-- leftCol --}}
                <div class="col-6 mb-5">



                    {{-- picture --}}
                    <label class="form-label form--label">Picture</label>
                    <div class="img--holder for-store">
                        <img loading="lazy" src="{{ asset('assets/img/Logo/logo.png') }}" />
                    </div>




                </div>
                {{-- end leftCol --}}






                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}







                {{-- rightCol --}}
                <div class="col-6 mb-4">
                    <div class="row">



                        {{-- address --}}
                        <div class="col-12 mb-4">
                            <label class="form-label form--label">Address</label>
                            <textarea class="form-control form--input form--textarea"></textarea>
                        </div>


                        {{-- latitude --}}
                        <div class="col-6 mb-4">
                            <label class="form-label form--label">Latitude</label>
                            <input class="form-control form--input" type="text" />
                        </div>



                        {{-- longitude --}}
                        <div class="col-6 mb-4">
                            <label class="form-label form--label">Longitude</label>
                            <input class="form-control form--input" type="text" />
                        </div>



                        {{-- isActive --}}
                        <div class="col-12">

                            <div class="form-check form-switch form--switch w-100 justify-content-center">
                                <input class="form-check-input" type="checkbox" id="formCheck-1" />
                                <label class="form-check-label fs-6" for="formCheck-1">Show Global Address on
                                    Application</label>
                            </div>

                        </div>


                    </div>
                </div>
                {{-- end rightCol --}}








                {{-- --------------------------------------- --}}
                {{-- --------------------------------------- --}}





                {{-- submitButton --}}
                <div class="col-12 text-center">
                    <button class="btn btn--theme
                    btn--submit rounded-1" type="button" style="margin-right: 2%">Save Address</button>
                </div>
            </div>
        </form>
        {{-- endForm --}}









        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}






        {{-- 3: About --}}


        {{-- aboutForm --}}
        <form class="mb-5">
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
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- paragraphTitleAr--}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Paragraph Title
                        <span class="lang--span">العربية</span>
                    </label>

                    <input class="form-control form--input" type="text" />
                </div>









                {{-- content --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Paragraph Content</label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>




                {{-- contentAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Paragraph Content
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













        {{-- ---------------------------------------------- --}}
        {{-- ---------------------------------------------- --}}





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




            {{-- --------------------------- --}}
            {{-- --------------------------- --}}





            {{-- rows --}}
            <div class="row g-0 align-items-center results--item">


                {{-- serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">AN-001</label>
                </div>



                {{-- title --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Paragraph Title</label>
                </div>



                {{-- content --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Paragraph Content</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#paragraphs-edit" data-bs-toggle="modal">Edit
                                Paragraph</a>


                            {{-- 2: remove --}}
                            <a class="dropdown-item" href="#">Remove Paragraph</a>
                        </div>
                    </div>
                </div>
                {{-- endActions --}}



            </div>
            {{-- endRow --}}





        </div>
    </section>
    {{-- endSections --}}



















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.help.components.help-paragraphs-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}