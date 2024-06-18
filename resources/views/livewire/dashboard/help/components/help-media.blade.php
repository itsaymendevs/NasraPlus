{{-- socialForm --}}
<form wire:submit='update' class="form--page" wire:loading.class='disabled'>
    <div class="row">



        {{-- subheading --}}
        <div class="col-12">
            <div class="row g-0 hr--subtitle">
                <div class="col-9">
                    <hr />
                </div>
                <div class="col-3">
                    <h5>Media info</h5>
                </div>
            </div>
        </div>






        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}






        {{-- 1: websiteURL --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Website URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.websiteURL' />
        </div>




        {{-- empty --}}
        <div class="col-6 mb-4"></div>






        {{-- facebookProfile --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Facebook Profile ID</label>
            <input class="form-control form--input" type="text" wire:model='instance.facebookID' />
        </div>




        {{-- facebookURL --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Facebook URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.facebookURL' />
        </div>






        {{-- linkedInProfile --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">LinkedIn Profile ID</label>
            <input class="form-control form--input" type="text" wire:model='instance.linkedinID' />
        </div>


        {{-- linkedinURL --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">LinkedIn URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.linkedinURL' />
        </div>





        {{-- twitterProfile --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Twitter Profile ID</label>
            <input class="form-control form--input" type="text" wire:model='instance.twitterID' />
        </div>



        {{-- twitterURL --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Twitter URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.twitterURL' />
        </div>







        {{-- instaProfile --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Instagram Profile ID</label>
            <input class="form-control form--input" type="text" wire:model='instance.instagramID' />
        </div>



        {{-- instaURL --}}
        <div class="col-6 mb-4">
            <label class="form-label form--label">Instagram URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.instagramURL' />
        </div>







        {{-- ---------------------------------- --}}
        {{-- ---------------------------------- --}}




        {{-- applicationVideo --}}




        {{-- subtitle --}}
        <div class="col-12 mt-4">
            <div class="row g-0 hr--subtitle">
                <div class="col-9">
                    <hr />
                </div>
                <div class="col-3">
                    <h5>Application Video</h5>
                </div>
            </div>
        </div>





        {{-- videoTitle --}}
        <div class="col-4 mb-4">
            <label class="form-label form--label">Video Title</label>
            <input class="form-control form--input" type="text" wire:model='instance.videoTitle' />
        </div>




        {{-- videoTitleAr --}}
        <div class="col-4 mb-4">
            <label class="form-label form--label">Video Title
                <span class="lang--span">العربية</span>
            </label>
            <input class="form-control form--input" type="text" wire:model='instance.videoTitleAr' />
        </div>




        {{-- videoURL --}}
        <div class="col-4 mb-4">
            <label class="form-label form--label">Video URL</label>
            <input class="form-control form--input" type="text" wire:model='instance.videoURL' />
        </div>




        {{-- submitButton --}}
        <div class="col-12 text-center mt-3">
            <button class="btn btn--theme btn--submit rounded-1" wire:loading.class='disabled'>Save Information</button>
        </div>

    </div>
</form>
{{-- endForm --}}