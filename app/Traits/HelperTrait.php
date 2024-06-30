<?php

namespace App\Traits;

use App\Models\CityDeliveryTime;
use App\Models\CityDistrict;
use App\Models\DeliveryRegion;
use App\Models\Order;
use App\Models\State;
use App\Models\SubCategory;
use App\Models\Type;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;


trait HelperTrait
{



    use LivewireAlert;



    // :: globalVariables
    public $removeId;






    protected function getGramToKG()
    {
        return 1000;

    } // end function






    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------









    protected function getDefaultPreview()
    {


        // 1: define defaultPreview Picture
        $defaultPreview = url('assets/img/placeholder.png');

        return $defaultPreview;



    } // end function







    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------







    protected function getCurrentDate()
    {


        // 1: getDate
        return $currentDate = date('Y-m-d', strtotime('+4 hours'));


    } // end function








    // --------------------------------------------------------------






    protected function getNextDate()
    {


        // 1: getDate
        return $tmwDate = date('Y-m-d', strtotime('+1 day +4 hours'));


    } // end function








    // --------------------------------------------------------------





    protected function getDateByDays($days)
    {


        // 1: getDate
        return $date = date('Y-m-d', strtotime("+{$days} day +4 hours"));


    } // end function







    // --------------------------------------------------------------







    protected function getDateByDate($originalDate, $days)
    {


        // 1: getDate
        return $date = date('Y-m-d', strtotime("{$originalDate} +{$days} day +4 hours"));


    } // end function










    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------









    protected function makeRequest($requestURL, $instance)
    {




        // 1: URL - token
        $requestURL = env('APP_API') . $requestURL;
        // $token = session('token');



        // 2: sendRequest
        $response = Http::post($requestURL, [
            'instance' => $instance,
        ])->json();





        // 3: convertToObject
        $response = json_decode(json_encode($response));

        return $response;


    } // end function









    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------











    protected function makeAlert($type, $message = '', $confirmMethod = '')
    {



        // 1: removeType (custom)
        if ($type == 'remove') {


            $this->alert('question', 'This item and related items will be permanently removed', [
                'position' => 'top',
                'timer' => '',
                'toast' => true,
                'width' => '400',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'confirmButtonText' => 'Remove',
                'cancelButtonText' => 'Cancel',
                'confirmButtonColor' => '#dc3545',
                'cancelButtonColor' => '#d3d3d3',
                'onConfirmed' => $confirmMethod,
            ]);



            // 2: questionType
        } elseif ($type == 'question') {


            $this->alert('question', $message, [
                'position' => 'top',
                'timer' => '',
                'toast' => true,
                'width' => '400',
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'confirmButtonText' => 'Confirm',
                'cancelButtonText' => 'Cancel',
                'confirmButtonColor' => '#87b2a9',
                'cancelButtonColor' => '#d3d3d3',
                'onConfirmed' => $confirmMethod,
            ]);




            // 3: success - info
        } else {

            $this->alert($type, $message, [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'width' => '400',
                'timerProgressBar' => true,
            ]);

        } // end if





    } // end function










    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------










    protected function uploadFile($instanceFile, $path, $key = 'ITM')
    {


        // 1: uploadFile - makeFileName
        $fileName = $key . '-' . date('h.iA') . rand(10, 10000) . rand(10, 10000) . rand(10, 10000) . '.' . $instanceFile->getClientOriginalExtension();
        $instanceFile->storeAs($path, $fileName, 'public');


        // 1.2: return fileName
        return $fileName;



    } // end function










    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------










    protected function replaceFile($instanceFile, $path, $fileName, $key = 'ITM')
    {


        // 1: removeFile
        if (! empty($fileName))
            Storage::disk('public')->delete($path . '/' . $fileName);






        // 2: uploadFile - makeFileName
        $fileName = $key . '-' . date('h.iA') . rand(10, 10000) . rand(10, 10000) . rand(10, 10000) . '.' . $instanceFile->getClientOriginalExtension();
        $instanceFile->storeAs($path, $fileName, 'public');


        // 1.2: return fileName
        return $fileName;



    } // end function











    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------









    protected function removeFile($fileName, $path)
    {


        // 1: removeFile
        if (! empty($fileName))
            Storage::disk('public')->delete($path . '/' . $fileName);



        return true;


    } // end function


















    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------








    protected function makeSerial($characters, $currentCount)
    {


        // 1: convert
        $currentCount = intval($currentCount);



        // 1.2: defineAndConcat
        if ($currentCount < 10) {

            return $characters . '-000' . ($currentCount + 1);

        } elseif ($currentCount < 100) {

            return $characters . '-00' . ($currentCount + 1);

        } elseif ($currentCount < 1000) {

            return $characters . '-0' . ($currentCount + 1);

        } elseif ($currentCount < 10000) {

            return $characters . '-' . ($currentCount + 1);

        } // end if




    } // end function














    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------





    public function levelSelect($levelType, $value, $levelId = null)
    {




        // 1: country - state - region
        if ($levelType == 'country') {



            // A: getStates
            $states = State::where('countryId', $value)->get(['id', 'name as text'])?->toArray() ?? [];



            // B: validateEmpty
            count($states ?? []) ? array_unshift($states, ['id' => '', 'text' => '']) : null;




            // C: refreshSelect
            $this->dispatch('refreshSelect', id: '.level--two', data: $states);
            $this->dispatch('refreshSelect', id: '.level--three', data: ['id' => '', 'text' => '']);




        } elseif ($levelType == 'state') {




            // A: getRegions
            $regions = DeliveryRegion::where('stateId', $value)->get(['id', 'name as text'])?->toArray() ?? [];



            // B: validateEmpty
            count($regions ?? []) ? array_unshift($regions, ['id' => '', 'text' => '']) : null;




            // C: refreshSelect
            $this->dispatch('refreshSelect', id: '.level--three', data: $regions);





        } // end if







        // ----------------------------------------------------
        // ----------------------------------------------------
        // ----------------------------------------------------









        // 2: category - subCategory - type
        if ($levelType == 'category') {



            // A: getSubcategory
            $subCategories = SubCategory::where('categoryId', $value)->get(['id', 'name as text'])?->toArray() ?? [];



            // B: validateEmpty
            count($subCategories ?? []) ? array_unshift($subCategories, ['id' => '', 'text' => '']) : null;




            // C: refreshSelect
            if ($levelId) {

                $this->dispatch('refreshSelect', id: ".level--two[data-id='{$levelId}']", data: $subCategories);
                $this->dispatch('refreshSelect', id: ".level--three[data-id='{$levelId}']", data: ['id' => '', 'text' => '']);

            } else {

                $this->dispatch('refreshSelect', id: '.level--two', data: $subCategories);
                $this->dispatch('refreshSelect', id: '.level--three', data: ['id' => '', 'text' => '']);

            } // end if







        } elseif ($levelType == 'subCategory') {




            // A: getTypes
            $types = Type::where('subCategoryId', $value)->get(['id', 'name as text'])?->toArray() ?? [];



            // B: validateEmpty
            count($types ?? []) ? array_unshift($types, ['id' => '', 'text' => '']) : null;




            // C: refreshSelect
            if ($levelId) {

                $this->dispatch('refreshSelect', id: ".level--three[data-id='{$levelId}']", data: $types);


            } else {

                $this->dispatch('refreshSelect', id: ".level--three", data: $types);

            } // end if




        } // end if





    } // end function








    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------









    function formatBytes($bytes, $precision = 1)
    {


        // ::rootOfFormat
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;



        // 1: bytes
        if ($bytes < $kilobyte) {
            return $bytes . ' B';


            // 2: kiloBytes
        } elseif ($bytes < $megabyte) {
            return round($bytes / $kilobyte, $precision) . ' KB';


            // 3: megaBytes
        } elseif ($bytes < $gigabyte) {
            return round($bytes / $megabyte, $precision) . ' MB';


            // 4: gigaBytes
        } else {

            return round($bytes / $gigabyte, $precision) . ' GB';

        } // end if


    } // end function









    // --------------------------------------------------------------







    function differentInDays($fromDate, $untilDate)
    {



        // 1: convertToMilliseconds
        $fromDate = strtotime($fromDate);
        $untilDate = strtotime($untilDate);




        // 1.2: sub - round
        $difference = $untilDate - $fromDate;

        return round($difference / (60 * 60 * 24));





    } // end function






    // --------------------------------------------------------------





    function makeGroupToken()
    {


        // :: returnToken
        return date('dmYhisA');


    } // end function









    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------










    function decodeOTP($content, $orderId)
    {


        // 1: getOrder
        $order = Order::find($orderId);



        // 1.2: replaceVariables
        $content = str_replace('@orderNum', $order?->orderNumber ?? '', $content);
        $content = str_replace('@userFN', $order?->user?->firstName ?? '', $content);
        $content = str_replace('@userLN', $order?->user?->lastName ?? '', $content);
        $content = str_replace('@receiver', $order?->receiverName ?? '', $content);
        $content = str_replace('@pickupCode', $order?->pickupCode ?? '', $content);



        return $content;


    } // end function






    // --------------------------------------------------------------







    function sendCustomOTP($token, $phone, $content)
    {



        // 1: sendOTP
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $token
        ])->post('https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', [
                    'from' => 'Nasra', // 11 char max
                    'to' => '+' . $phone, // +44 99 959 0002
                    'body' => $content, // 70 char per message - 160 (latin)
                ]);



        return $response;


    } // end function








    // --------------------------------------------------------------
    // --------------------------------------------------------------
    // --------------------------------------------------------------





} // end trait
