{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



    {{-- head --}}
    @section('head')

    <title>Advertisements</title>

    @endsection
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}










    {{-- headerSection --}}
    <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div"
        class="header--div w-100" wire:ignore.self>



        <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Orders'
            leftLink="{{ route('dashboard.orders') }}" title='Advertisements' />


    </section>
    {{-- endHeader --}}








    {{-- --------------------------------------- --}}
    {{-- --------------------------------------- --}}











    {{-- section --}}
    <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
        wire:ignore.self>




        {{-- 1: rectangles --}}
        <livewire:dashboard.help.group.advertisements.components.advertisements-rectangles />








        {{-- ----------------------------------------------------------- --}}
        {{-- ----------------------------------------------------------- --}}












        {{-- 2: squares --}}
        <livewire:dashboard.help.group.advertisements.components.advertisements-squares />







    </section>
    {{-- endSection --}}



















    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}





    {{-- modals --}}
    @section('modals')




    {{-- 1: edit --}}
    <livewire:dashboard.help.group.advertisements.components.advertisements-squares-edit />


    {{-- 2: edit --}}
    <livewire:dashboard.help.group.advertisements.components.advertisements-rectangles-edit />




    @endsection
    {{-- endModals --}}






    {{-- ----------------------------------------------------- --}}
    {{-- ----------------------------------------------------- --}}








</div>
{{-- endCol --}}