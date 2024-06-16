{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Create Store</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.stores') }}" title='Create Store' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- sections --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
        <form class="form--page mb-5">
            <div class="row">



                {{-- 1: name --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name</label>
                    <input class="form-control form--input" type="text" />
                </div>



                {{-- 1.2: nameAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input" type="text" />
                </div>






                {{-- 1.3: description --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description</label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>




                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description
                        <span class="lang--span">العربية</span>
                    </label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>









                {{-- 1.4: receivingTimes --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Receiving Times</label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>



                <div class="col-6 mb-4">
                    <label class="form-label form--label">Receiving Times
                        <span class="lang--span">العربية</span>
                    </label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>





                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}








                {{-- 2: latitude --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Latitude</label>
                    <input class="form-control form--input" type="text" />
                </div>




                {{-- 2.1: longitude --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Longitude</label>
                    <input class="form-control form--input" type="text" />
                </div>





                {{-- togglers --}}
                <div class="col-6 align-self-end mb-4 d-flex justify-content-around align-items-center pb-2">




                    {{-- 2.2: mainStore --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-1" /><label
                            class="form-check-label" for="formCheck-1">Main store</label>
                    </div>



                    {{-- 2.3: isActive --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-2" />
                        <label class="form-check-label" for="formCheck-2">Receive orders</label>
                    </div>
                </div>










                {{-- --------------------------------- --}}
                {{-- --------------------------------- --}}







                {{-- imageFile --}}
                <div class="col-6 align-self-end mt-4">
                    <label class="form-label form--label">Store Picture</label>
                    <div class="img--holder for-store">
                        <img loading="lazy" />
                    </div>
                </div>







                {{-- submitButton --}}
                <div class="col-6 text-center align-self-end">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save Store
                    </button>
                </div>

            </div>
        </form>
    </section>
    {{-- endSection --}}











</div>
{{-- endCol --}}