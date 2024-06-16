{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Create Area</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.areas') }}" title='Create Area' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- section --}}
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







                {{-- 2: state --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">State</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- 3: country --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Province</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>








                {{-- 4: estimatedTime --}}
                <div class="col-12 mb-4">
                    <label class="form-label form--label">Estimated Time for Delivery</label>
                    <div class="select--single-wrapper" style="width: 95%">
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>






                {{-- 5: deliveryPrice --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Delivery Price</label>
                    <input class="form-control form--input" type="text" />
                </div>






                {{-- 6: isActive --}}
                <div class="col-6 align-self-end mb-4 pb-3">
                    <div class="form-check form--checkbox d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="formCheck-2" />
                        <label class="form-check-label" for="formCheck-2">Activate delivery for area</label>
                    </div>
                </div>










                {{-- submitButton --}}
                <div class="col-12 text-center mt-4">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save item
                    </button>
                </div>

            </div>
            {{-- endRow --}}



        </form>
    </section>
    {{-- endSection --}}














</div>
{{-- endCol --}}