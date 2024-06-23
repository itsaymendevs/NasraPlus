<!DOCTYPE html>
<html lang="en">



   <head>




      {{-- 1.2: meta --}}
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1">
      <meta name="description" content="Nasra Centre - Best Grocery Place">
      <meta name="keywords" content="grocery, online grocery, fresh, fruits, vegetables, nasra, nasra centre">
      <meta name="author" content="Orbits Team">

      <link rel="apple-touch-icon" sizes="180x180" href="{{url('apple-touch-icon.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon-16x16.png')}}">
      <link rel="manifest" href="{{url('site.webmanifest')}}">
      <link rel="mask-icon" href="{{url('safari-pinned-tab.svg')}}" color="#ffffff">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">



      {{-- 1.3: Head --}}
      @yield('head')











      {{-- 1.4: fonts --}}
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700&amp;display=swap">






      {{-- 1.5: stylesheets --}}
      <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/aos.min.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/animation.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/filters.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/globals.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/home.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/modal.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/navbar.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/orders.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/profile.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/scroll.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/select-custom.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/select.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/sms.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/sort.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/styles.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/variables.css')}}">









      {{-- 1.6: jquery --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
         integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
         crossorigin="anonymous" referrerpolicy="no-referrer" data-navigate-once></script>




   </head>
   {{-- endHeaders --}}








   {{-- --------------------------------------------------- --}}
   {{-- --------------------------------------------------- --}}






   <body>







      {{-- bodySection --}}
      <section id="section--body">
         <div class="container-fluid bg-cover bg--main px-0">
            <div class="row g-0 min-vh-100">




               {{-- 1: content --}}
               {{ $slot }}




            </div>
         </div>
      </section>
      {{-- endSection --}}









      {{-- ------------------------------------------------------------------- --}}
      {{-- ------------------------------------------------------------------- --}}








      {{-- 2: scripts --}}
      <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}" data-navigate-once></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js" data-navigate-once>
      </script>
      <script src="{{url('assets/js/aos.min.js')}}"></script>
      <script src="{{url('assets/js/bs-init.js')}}"></script>

      <script src="{{url('assets/js/init-sort.js')}}"></script>
      <script src="{{url('assets/js/init.js')}}"></script>
      <script src="{{url('assets/js/select2.min.js')}}"></script>





      {{-- 2.1: sweetAlert 2 --}}
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <x-livewire-alert::scripts />






      @yield('scripts')



   </body>
</html>
{{-- endHTML --}}