<div id="disable--wrap" class="mb-5">
   <div class="row g-0 align-items-end">



      {{-- 1: serviceActive --}}
      <div class="col-4">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" id="isServiceActive-checkbox-1"
               wire:model='instance.isServiceActive' wire:change='toggleService' />
            <label class="form-check-label ms-1" for="isServiceActive-checkbox-1">Activate Service in {{
               $instance?->code }}</label>
         </div>
      </div>






      {{-- 2: toSDG [Except SD] --}}
      <div class="col-8">


         @if ($instance?->currency != 'SDG')

         <div class="d-flex justify-content-end align-items-center">


            {{-- countryCurrency --}}
            <img class="flag--icon" src="{{url('assets/img/Flags/' . $instance?->code . '.png')}}" />
            <h6 class="mb-0 ms-2 me-3 fw-bold">1 {{ $instance?->currency }} =</h6>



            {{-- input --}}
            <input type="number" step='0.01' class="form--input flag--input text-center fw-bold"
               wire:model='instance.toSDG' required wire:change='updateToSDG' wire:loading.class='disabled' />



            {{-- SDCurrency --}}
            <h6 class="mb-0 ms-3 me-2 fw-bold">SDG</h6>
            <img class="flag--icon" src="{{url('assets/img/Flags/sd.png')}}" />

         </div>

         @endif
         {{-- end if --}}


      </div>
   </div>
</div>
{{-- endWrap --}}