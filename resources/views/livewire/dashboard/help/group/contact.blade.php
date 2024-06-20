{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Contact - {{ $country->name }}</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders' leftLink="#"
            title="Contact - {{ $country->name }}" />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}







    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>



        {{-- service - toSDG --}}
        <livewire:dashboard.help.group.contact.components.contact-service key='service-section'
            id='{{ $country->id }}' />












        {{-- ---------------------------------------------- --}}
        {{-- ---------------------------------------------- --}}







        {{-- contactForm --}}
        <livewire:dashboard.help.group.contact.components.contact-information key='information-section'
            id='{{ $country->id }}' />













        {{-- --------------------------------------- --}}
        {{-- --------------------------------------- --}}







        {{-- phoneForm --}}
        <livewire:dashboard.help.group.contact.components.contact-phones key='phones-section' id='{{ $country->id }}' />










        {{-- -------------------------------------------------- --}}
        {{-- -------------------------------------------------- --}}






        {{-- terms --}}
        <livewire:dashboard.help.group.contact.components.contact-terms key='terms-section' id='{{ $country->id }}' />








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