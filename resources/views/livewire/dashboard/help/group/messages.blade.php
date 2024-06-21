{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Local Messages</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title='Local Messages' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}


















    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4">
        <div class="row g-0 align-items-center mb-2">





            {{-- 1: phoneConfirmatino --}}
            <livewire:dashboard.help.group.messages.components.messages-phone-confirmation key='phone-confirmation' />









            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}
            {{-- -------------------------------------------- --}}









            {{-- ** Delivery ** --}}




            {{-- subHeading --}}
            <div class="col-12">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Delivery</h5>
                    </div>
                </div>
            </div>








            {{-- wrapper --}}
            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-delivery">






                    {{-- 1: processing --}}
                    <livewire:dashboard.help.group.messages.components.messages-delivery-processing
                        key='delivery-processing' />









                    {{-- -------------------------------------- --}}
                    {{-- -------------------------------------- --}}






                    {{-- 2: canceled --}}
                    <livewire:dashboard.help.group.messages.components.messages-delivery-canceled
                        key='delivery-canceled' />










                    {{-- ----------------------------------------- --}}
                    {{-- ----------------------------------------- --}}








                    {{-- 3: completed --}}
                    <livewire:dashboard.help.group.messages.components.messages-delivery-completed
                        key='delivery-completed' />


                    {{-- end item --}}

                </div>
            </div>








            {{-- --------------------------------------------------------- --}}
            {{-- --------------------------------------------------------- --}}
            {{-- --------------------------------------------------------- --}}







            {{-- 3: Pickup --}}




            {{-- subheading --}}
            <div class="col-12">
                <div class="row g-0 hr--subtitle">
                    <div class="col-9">
                        <hr />
                    </div>
                    <div class="col-3">
                        <h5>Pickup</h5>
                    </div>
                </div>
            </div>




            {{-- ---------------------------- --}}
            {{-- ---------------------------- --}}







            {{-- wrapper --}}
            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-collection">





                    {{-- 1: processing --}}
                    <livewire:dashboard.help.group.messages.components.messages-pickup-processing
                        key='pickup-processing' />











                    {{-- ------------------------------------------ --}}
                    {{-- ------------------------------------------ --}}







                    {{-- 2: canceled --}}
                    <livewire:dashboard.help.group.messages.components.messages-pickup-canceled key='pickup-canceled' />













                    {{-- ----------------------------------- --}}
                    {{-- ----------------------------------- --}}







                    {{-- 3: completed --}}
                    <livewire:dashboard.help.group.messages.components.messages-pickup-completed
                        key='pickup-completed' />






                </div>
            </div>
            {{-- endCol --}}





        </div>
    </section>
    {{-- endSection --}}










</div>
{{-- endCol --}}