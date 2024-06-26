{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Global Messages</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
            leftLink="{{ route('dashboard.orders') }}" title='Global Messages' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>
        <div class="row g-0 align-items-center mb-2">
            <div class="col-12">



                {{-- tabs --}}
                <div class="accordion mb-5" role="tablist" id="results--sms-phone">



                    {{-- 1: phoneConfirmation --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-phone-confirmation />



                </div>
            </div>
            {{-- endCol --}}












            {{-- ------------------------------------------------- --}}
            {{-- ------------------------------------------------- --}}
            {{-- ------------------------------------------------- --}}




            {{-- 2: delivery Tabs --}}




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




            {{-- ---------------------- --}}
            {{-- ---------------------- --}}





            <div class="col-12">
                <div class="accordion mb-5" role="tablist" id="results--sms-delivery">



                    {{-- 1: processing --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-delivery-processing />










                    {{-- -------------------------------------------------- --}}
                    {{-- -------------------------------------------------- --}}







                    {{-- canceled --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-delivery-canceled />






                    {{-- ------------------------------------------------ --}}
                    {{-- ------------------------------------------------ --}}






                    {{-- 3: completed --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-delivery-completed />








                    {{-- ----------------------------------------------------- --}}
                    {{-- ----------------------------------------------------- --}}






                    {{-- 4: confirmed --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-delivery-confirmed />




                </div>
                {{-- endAccording --}}







                {{-- empty --}}
                <div class="d-block mb-4"></div>

            </div>
            {{-- endCol --}}









            {{-- ----------------------------------------------------- --}}
            {{-- ----------------------------------------------------- --}}





            {{-- 3: Pickup --}}




            {{-- subHeading --}}
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






            {{-- ------------------------------------ --}}
            {{-- ------------------------------------ --}}




            {{-- wrapper --}}
            <div class="col-12">
                <div class="accordion" role="tablist" id="results--sms-collection">





                    {{-- 1: processing --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-pickup-processing />





                    {{-- ----------------------------------------------------- --}}
                    {{-- ----------------------------------------------------- --}}




                    {{-- 2: canceled --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-pickup-canceled />










                    {{-- ----------------------------------------------------- --}}
                    {{-- ----------------------------------------------------- --}}




                    {{-- 3: completed --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-pickup-completed />










                    {{-- ----------------------------------------------------- --}}
                    {{-- ----------------------------------------------------- --}}




                    {{-- 4: confirmed --}}
                    <livewire:dashboard.help.group.messages-global.components.messages-global-pickup-confirmed />




                </div>
            </div>
        </div>
    </section>
    {{-- endSection --}}













</div>
{{-- endCol --}}