{{-- Header --}}
<section data-aos="fade-down" data-aos-duration="700" data-aos-delay="400" id="header--div" class="header--div w-100"
    wire:ignore.self>



    {{-- 1: leftButton --}}



    {{-- 1.2: return --}}
    @if ($leftTitle == 'Return' || $leftTitle == 'Orders' || $leftTitle == 'Previous Orders')




    <a class="btn btn--outline-theme btn--header scale--3 px-4" role="button" href="{{ $leftLink }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
            class="bi bi-arrow-up-left me-2">
            <path fill-rule="evenodd"
                d="M2 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H3.707l10.147 10.146a.5.5 0 0 1-.708.708L3 3.707V8.5a.5.5 0 0 1-1 0v-6z">
            </path>
        </svg>{{ $leftTitle }}
    </a>








    {{-- 1.3: createModal --}}
    @elseif ($type == 'toggle')



    {{-- 1: newButton --}}
    <button class="btn btn--outline-theme btn--header scalemix--3 px-4" type='button' data-bs-toggle='modal'
        data-bs-target='{{ $leftLink }}'>
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
            class="bi bi-plus-lg me-2">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z">
            </path>
        </svg>{{ $leftTitle }}
    </button>









    {{-- 1.4: create --}}
    @else



    {{-- 1: newButton --}}
    <a class="btn btn--outline-theme btn--header scalemix--3 px-4" role="button" href="{{ $leftLink }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
            class="bi bi-plus-lg me-2">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z">
            </path>
        </svg>{{ $leftTitle }}
    </a>


    @endif
    {{-- end if --}}









    {{-- --------------------------------- --}}
    {{-- --------------------------------- --}}







    {{-- 2: title --}}
    <h3 class="mb-0">{{ $title }}</h3>







    {{-- --------------------------------- --}}
    {{-- --------------------------------- --}}







    {{-- 3: logoutButton --}}
    <a href="{{ route('dashboard.login') }}" class="btn btn--theme btn--header scale--3 px-4">Logout
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
            class="bi bi-arrow-up-right ms-2">
            <path fill-rule="evenodd"
                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z">
            </path>
        </svg>
    </a>



</section>
{{-- endHeader --}}