<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>
            @yield('pageTitle')
        </title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('site.webmanifest')}}">
        <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">


        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Cairo:400,500,600,700&amp;subset=arabic&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette&amp;display=swap">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Noto+Sans+Arabic:400,500,600,700&amp;display=swap">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&amp;display=swap">
        <link rel="stylesheet" href="{{url('assets/css/aos.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/filters.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/globals.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/home.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/modal.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/orders.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/profile.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/scroll.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/select2-custom.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/select2.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/sms.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/sort.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/styles.css')}}">

        <link rel="stylesheet" href="{{url('assets/css/checkout.css')}}" />

        {{-- JQUERY --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </head>



    {{-- ------------------------------------------------------------------------------------ --}}


    <body>
        <section data-aos="zoom-out" data-aos-duration="450" data-aos-delay="50" data-aos-once="true"
            id="section--body">


            @yield('content')





            {{-- --------------------- --}}


            <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{url('assets/js/aos.min.js')}}"></script>
            <script src="{{url('assets/js/bs-init.js')}}"></script>
            <script src="{{url('assets/js/init.js')}}"></script>
            <script src="{{url('assets/js/select2.min.js')}}"></script>


            @yield('scripts')


        </section>
    </body>
    {{-- end body --}}




    {{-- ------------------------------------------------------------------------------------ --}}



</html>
{{-- end html --}}