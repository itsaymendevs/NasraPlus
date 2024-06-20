{{-- form --}}
<form wire:submit='update' wire:loading.class='disabled' class="form--page mb-5">
    <div class="row">


        {{-- email --}}
        <div class="col-8 mb-4">
            <label class="form-label form--label">Email Address</label>
            <input class="form-control form--input" type="email" wire:model='instance.email' />
        </div>



        {{-- empty --}}
        <div class="col-4 mb-4"></div>



        {{-- whatsapp --}}
        <div class="col-4 mb-4">
            <label class="form-label form--label">Whatsapp</label>
            <input class="form-control form--input" type="text" wire:model='instance.whatsapp' />
        </div>



        {{-- whatsappURL --}}
        <div class="col-4 mb-4">
            <label class="form-label form--label">Whatsapp URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.whatsappURL' />
        </div>




        {{-- submitButton --}}
        <div class="col-4 align-self-end mb-4">
            <button class="btn btn--theme btn--submit rounded-1 mb-1" wire:loading.class='disabled'>
                Save Changes
            </button>
        </div>


    </div>
</form>
{{-- endForm --}}