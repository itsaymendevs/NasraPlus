{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Employees</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>




        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Employees' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}











    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">




        {{-- 1: createForm --}}
        <form class="form--page mb-5">
            <div class="row">



                {{-- 1.2: name --}}
                <div class="col-6">
                    <label class="form-label form--label">Name</label>
                    <input class="form-control form--input mb-4" type="text" />
                </div>



                {{-- 1.2: nameAr --}}
                <div class="col-6">
                    <label class="form-label form--label">Name
                        <span class="lang--span">العربية</span>
                    </label>
                    <input class="form-control form--input mb-4" type="text" />
                </div>





                {{-- 1.3: password --}}
                <div class="col-6">
                    <label class="form-label form--label">Password</label>
                    <input class="form-control form--input" type="password" />
                </div>







                {{-- 1.4: permission --}}
                <div class="col-6 align-self-end d-flex justify-content-around align-items-center mb-3">




                    {{-- 1: lowPermission --}}
                    <div class="form-check form--radio">
                        <input class="form-check-input" type="radio" id="formCheck-1" checked="" name="permission"
                            value="1" />
                        <label class="form-check-label" for="formCheck-1">Low Permission</label>
                    </div>



                    {{-- 2: highPermission --}}
                    <div class="form-check form--radio">
                        <input class="form-check-input" type="radio" id="formCheck-2" name="permission" value="2" />
                        <label class="form-check-label" for="formCheck-2">High Permission</label>
                    </div>

                </div>
                {{-- endWrap --}}










                {{-- submitButton --}}
                <div class="col-12 text-center mt-5">
                    <button class="btn btn--theme btn--submit rounded-1" type="button">
                        Save Employee
                    </button>
                </div>
            </div>
        </form>
        {{-- endForm --}}








        {{-- -------------------------------------------------------- --}}
        {{-- -------------------------------------------------------- --}}







        {{-- resultsRow --}}
        <div id="results--row">



            {{-- subtitle --}}
            <div class="row g-0 hr--subtitle">
                <div class="col-9">
                    <hr />
                </div>
                <div class="col-3">
                    <h5>Table List</h5>
                </div>
            </div>




            {{-- headers --}}
            <div class="row g-0 align-items-center results--header mb-2" id="results--header">
                <div class="col-2">
                    <label class="col-form-label form--label row--label">Serial</label>
                </div>
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Name</label>
                </div>
                <div class="col-5">
                    <label class="col-form-label form--label row--label">Permission</label>
                </div>
                <div class="col-1">
                    <label class="col-form-label form--label row--label"></label>
                </div>
            </div>





            {{-- -------------------------------------- --}}
            {{-- -------------------------------------- --}}






            {{-- content --}}
            <div class="row g-0 align-items-center results--item">


                {{-- 1: serial --}}
                <div class="col-2">
                    <label class="col-form-label form--label row--label">EM-001</label>
                </div>



                {{-- 2: name --}}
                <div class="col-4">
                    <label class="col-form-label form--label row--label">Ahmed Ismail</label>
                </div>


                {{-- 2.5: nameAr --}}
                <div class="col-5">
                    <label class="col-form-label form--label row--label">High</label>
                </div>




                {{-- actions --}}
                <div class="col-1">
                    <div class="dropstart d-flex justify-content-center">
                        <button class="btn dropdown-toggle results--dropdown" aria-expanded="false"
                            data-bs-toggle="dropdown" type="button"></button>
                        <div class="dropdown-menu results--dropdown-menu">


                            {{-- 1: edit --}}
                            <a class="dropdown-item" data-bs-target="#employees-edit" data-bs-toggle="modal">Edit
                                Employee</a>



                            {{-- 2: resetPassword --}}
                            <a class="dropdown-item" href="#" data-bs-target="#employees-password-reset"
                                data-bs-toggle="modal">Reset Password</a>




                            {{-- 3: deActivate --}}
                            <a class="dropdown-item" href="#">Deactivate Account</a>
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
    <livewire:dashboard.employees.components.employees-edit />


    {{-- 2: resetPassword --}}
    <livewire:dashboard.employees.components.employees-password-reset />



    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}










</div>
{{-- endCol --}}