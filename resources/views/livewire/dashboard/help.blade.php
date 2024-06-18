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







        {{-- 1: media --}}
        <livewire:dashboard.help.components.help-media />














        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}




        {{-- 2: address --}}
        <livewire:dashboard.help.components.help-address />













        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}






        {{-- 3: About --}}
        <livewire:dashboard.help.components.help-about />






    </section>
    {{-- endSections --}}



















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}




    {{-- modals --}}
    @section('modals')




    {{-- 1: editAbout --}}
    <livewire:dashboard.help.components.help-about-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}