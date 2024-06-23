{{-- contentCol --}}
<div class="col-12 align-self-center content--col px-0" id="content--col">




   {{-- head --}}
   @section('head')

   <title>Nasra Centre</title>

   @endsection
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}










   {{-- section --}}
   <form wire:submit='check' id="content--main" class="d-block" wire:loading.class='disabled'>
      <div class="row justify-content-center align-items-center">





         {{-- leftCol --}}
         <div class="col-6 col-xxl-5">
            <div data-aos="fade-right" data-aos-duration="700" class="login--wrap" wire:ignore.self>




               {{-- 1: logo --}}
               <img data-aos="fade-down" data-aos-duration="700" data-aos-delay="300" class="login--logo"
                  wire:ignore.self src="{{ url('assets/img/Logo/logo-login.png') }}">



               {{-- name - password --}}
               <input type="text" class="form--input mb-4" placeholder="Full Name" required wire:model='name'>
               <input type="password" class="form--input mb-4" placeholder="Password" required wire:model='password'>


               <div class="text-center d-block pt-2">
                  <button class="btn btn--theme btn--submit btn--sm rounded-1" wire:loading.class='disabled'>
                     Login</button>
               </div>
            </div>
         </div>







         {{-- rightCol --}}
         <div class="col-5 col-xxl-4">
            <img data-aos="zoom-in" data-aos-duration="700" class="login--cover" wire:ignore.self
               src="{{ url('assets/img/pexels-sarah-chai-7263016.jpg') }}">
         </div>




      </div>
   </form>
   {{-- endSection --}}



</div>
{{-- endCol --}}