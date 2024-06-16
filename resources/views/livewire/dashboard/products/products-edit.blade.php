{{-- content --}}
<div class="col-9 content--col px-0" id="content--col">






    {{-- head --}}
    @section('head')

    <title>Edit Product</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}








    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
            leftLink="{{ route('dashboard.products') }}" title='Edit Product' />


    </section>
    {{-- endHeader --}}











    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- 1: section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">



        {{-- form --}}
        <form class="form--page mb-5">
            <div class="row">


                {{-- serial --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Serial</label>
                    <input class="form-control form--input" type="text">
                </div>




                {{-- togglers --}}
                <div class="col-6 align-self-end mb-4 d-flex justify-content-around align-items-center pb-3">


                    {{-- 1: hideProduct --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-3">
                        <label class="form-check-label" for="formCheck-3">Hide Product</label>
                    </div>



                    {{-- 2: mainPage --}}
                    <div class="form-check form--checkbox">
                        <input class="form-check-input" type="checkbox" id="formCheck-2">
                        <label class="form-check-label" for="formCheck-2">Main Page</label>
                    </div>
                </div>





                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}






                {{-- name --}}
                <div class="col-6 mb-4"><label class="form-label form--label">Name</label>
                    <input class="form-control form--input" type="text">
                </div>


                {{-- nameAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Name
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input" type="text">
                </div>






                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>






                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- subtitle --}}
                <div class="col-12">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr>
                        </div>
                        <div class="col-3">
                            <h5>General Details</h5>
                        </div>
                    </div>
                </div>









                {{-- compay --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Company</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- cateogry --}}
                <div class="col-6 mb-4"><label class="form-label form--label">Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>





                {{-- subCategory --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Sub Category</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>




                {{-- type --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Inner Type</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>






                {{-- buyPrice --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Buy Price</label>
                    <input class="form-control form--input" type="text">
                </div>


                {{-- sellPrice --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Sell Price</label>
                    <input class="form-control form--input" type="text">
                </div>





                {{-- offerPrice --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Offer Price
                        <small class="tag--optional">optional</small>
                    </label>
                    <input class="form-control form--input" type="text">
                </div>







                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}







                {{-- subtitle --}}
                <div class="col-12" style="margin-top: 60px;">
                    <div class="row g-0 hr--subtitle">
                        <div class="col-9">
                            <hr>
                        </div>
                        <div class="col-3">
                            <h5>Size / Weight</h5>
                        </div>
                    </div>
                </div>






                {{-- typeOfSize --}}
                <div class="col-12">
                    <div class="filters--radio-wrap mb-5" style="width: 95.5%;">


                        {{-- 1: byName --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="formCheck-6">
                            <label class="form-check-label" for="formCheck-6">By Name</label>
                        </div>



                        {{-- 2: fixedSize --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="formCheck-4">
                            <label class="form-check-label" for="formCheck-4">Fixed Size / Weight</label>
                        </div>



                        {{-- 3: dynamicSize --}}
                        <div class="form-check form--radio">
                            <input class="form-check-input" type="radio" id="formCheck-5">
                            <label class="form-check-label" for="formCheck-5">Dynamic Size / Weight</label>
                        </div>
                    </div>
                </div>









                {{-- sizeWeight --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Size / Weight</label>
                    <input class="form-control form--input" type="text">
                </div>




                {{-- minSizeWeight [Fixed] --}}
                <div class="col-3 d-none mb-4">
                    <label class="form-label form--label">Min. Size / Weight</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>



                {{-- unit --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Measuring Unit</label>
                    <div class="select--single-wrapper" wire:ignore>
                        <select class="form-select form--select">
                            <option value=""></option>
                            <option value="option">option</option>
                        </select>
                    </div>
                </div>









                {{-- hr --}}
                <div class="col-12">
                    <hr class="visually-hidden">
                </div>




                {{-- numberOfUnits --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">No. of Units</label>
                    <input class="form-control form--input" type="text">
                </div>



                {{-- quantityPerUnit --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Quantity / Unit</label>
                    <input class="form-control form--input" type="text">
                </div>



                {{-- totalQuantity --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Total Quantity</label>
                    <input class="form-control form--input" type="text" readonly="">
                </div>




                {{-- quantityPerOrder --}}
                <div class="col-3 mb-4">
                    <label class="form-label form--label">Max Quantity / Order</label>
                    <input class="form-control form--input" type="text">
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}








                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>





                {{-- description --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description
                        <small class="tag--optional">optional</small>
                    </label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>




                {{-- descirptionAr --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Description
                        <small class="tag--optional">optional</small>
                        <span class="lang--span">العربية</span>
                    </label>
                    <textarea class="form-control form--input form--textarea"></textarea>
                </div>






                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- hr --}}
                <div class="col-12 mb-5">
                    <hr class="visually-hidden">
                </div>





                {{-- mainPicture --}}
                <div class="col-6 mb-4">
                    <label class="form-label form--label">Main Picture</label>
                    <div class="img--holder">
                        <img loading="lazy">
                    </div>
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- extraPictures --}}
                <div class="col-6 mb-4">

                    {{-- subheading --}}
                    <label class="form-label form--label">Extra Pictures
                        <small class="tag--optional">optional</small>
                    </label>



                    {{-- wrapper --}}
                    <div class="row g-0">



                        {{-- 1: second --}}
                        <div class="col-6 mb-4">
                            <div class="img--holder"><img loading="lazy"></div>
                        </div>



                        {{-- 2: third --}}
                        <div class="col-6 mb-4">
                            <div class="img--holder"><img loading="lazy"></div>
                        </div>


                        {{-- 3: third --}}
                        <div class="col-6">
                            <div class="img--holder"><img loading="lazy"></div>
                        </div>
                    </div>
                </div>








                {{-- ---------------------------- --}}
                {{-- ---------------------------- --}}





                {{-- submitButton --}}
                <div class="col-12 text-center mt-3">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">Update Product</button>
                </div>
            </div>
        </form>
    </section>
    {{-- endForm --}}











</div>
{{-- endCol --}}