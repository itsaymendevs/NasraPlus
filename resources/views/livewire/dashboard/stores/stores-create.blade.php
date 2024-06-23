{{-- contentCol --}}
<div class="col-9 content--col px-0" id="content--col">



   {{-- head --}}
   @section('head')

   <title>Create Store</title>

   @endsection
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}










   {{-- headerSection --}}
   <section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div" class="header--div w-100"
      wire:ignore.self>




      <livewire:dashboard.components.top-bar key='topBar' type='regular' leftTitle='Return'
         leftLink="{{ route('dashboard.stores') }}" title='Create Store' />


   </section>
   {{-- endHeader --}}








   {{-- --------------------------------------- --}}
   {{-- --------------------------------------- --}}










   {{-- sections --}}
   <section data-aos="fade-left" data-aos-duration="700" id="content--main" class="d-block mt-5 content--main mx-4"
      wire:ignore.self>
      <form wire:submit='store' wire:loading.class='disabled' class="form--page mb-5">
         <div class="row">



            {{-- 1: name --}}
            <div class="col-6 mb-4">
               <label class="form-label form--label">Name</label>
               <input class="form-control form--input" type="text" required wire:model='instance.title' />
            </div>



            {{-- 1.2: nameAr --}}
            <div class="col-6 mb-4">
               <label class="form-label form--label">Name
                  <span class="lang--span">العربية</span>
               </label>
               <input class="form-control form--input" type="text" required wire:model='instance.titleAr' />
            </div>






            {{-- 1.3: description --}}
            <div class="col-6 mb-4">
               <label class="form-label form--label">Description</label>
               <textarea class="form-control form--input form--textarea" required
                  wire:model='instance.information'></textarea>
            </div>




            <div class="col-6 mb-4">
               <label class="form-label form--label">Description
                  <span class="lang--span">العربية</span>
               </label>
               <textarea class="form-control form--input form--textarea" required
                  wire:model='instance.informationAr'></textarea>
            </div>









            {{-- 1.4: receivingTimes --}}
            <div class="col-6 mb-4">
               <label class="form-label form--label">Receiving Times</label>
               <textarea class="form-control form--input form--textarea" required
                  wire:model='instance.receivingTimes'></textarea>
            </div>



            <div class="col-6 mb-4">
               <label class="form-label form--label">Receiving Times
                  <span class="lang--span">العربية</span>
               </label>
               <textarea class="form-control form--input form--textarea" required
                  wire:model='instance.receivingTimesAr'></textarea>
            </div>





            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}








            {{-- 2: latitude --}}
            <div class="col-3 mb-4">
               <label class="form-label form--label">Latitude</label>
               <input class="form-control form--input" type="text" wire:model='instance.latitude' />
            </div>




            {{-- 2.1: longitude --}}
            <div class="col-3 mb-4">
               <label class="form-label form--label">Longitude</label>
               <input class="form-control form--input" type="text" wire:model='instance.longitude' />
            </div>





            {{-- togglers --}}
            <div class="col-6 align-self-end mb-4 d-flex justify-content-around align-items-center pb-2">




               {{-- 2.2: mainStore --}}
               <div class="form-check form--checkbox">
                  <input class="form-check-input" type="checkbox" id="main-checkbox-1"
                     wire:model='instance.isMainStore' />
                  <label class="form-check-label" for="main-checkbox-1">Main Store</label>
               </div>



               {{-- 2.3: isActive --}}
               <div class="form-check form--checkbox">
                  <input class="form-check-input" type="checkbox" id="isActive-checkbox-1"
                     wire:model='instance.isActive' />
                  <label class="form-check-label" for="isActive-checkbox-1">Receive Orders</label>
               </div>
            </div>










            {{-- --------------------------------- --}}
            {{-- --------------------------------- --}}







            {{-- imageFile --}}
            <div class="col-6 align-self-end mt-4">
               <label class="img--holder for-store upload--wrap" data-bs-toggle="tooltip" data-bss-tooltip=""
                  for="store--file-1" title="Click To Upload">




                  {{-- caption --}}
                  <span class="upload--caption badge">Store Picture</span>




                  {{-- input --}}
                  <input class="form-control d-none file--input" id="store--file-1" required
                     data-preview="store--preview-1" type="file" wire:model='instance.imageFile' />


                  {{-- preview --}}
                  <img class="inventory--image-frame" id="store--preview-1"
                     src="{{ url('assets/img/placeholder.png') }}" wire:ignore />


               </label>
            </div>







            {{-- ---------------------------------------- --}}
            {{-- ---------------------------------------- --}}







            {{-- submitButton --}}
            <div class="col-6 text-center align-self-end">
               <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'
                  wire:target='instance.imageFile, store'>
                  Save Store
               </button>
            </div>

         </div>
      </form>
   </section>
   {{-- endSection --}}











</div>
{{-- endCol --}}