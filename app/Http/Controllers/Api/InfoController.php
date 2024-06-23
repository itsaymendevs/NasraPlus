<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\AboutInformation;
use App\Models\AddressInformation;
use App\Models\CountryContact;
use App\Models\CountryPhone;
use App\Models\Country;
use App\Models\DeliveryCondition;
use App\Models\MediaInformation;
use App\Models\Payment;
use App\Models\PaymentCondition;
use App\Models\PickupCondition;
use App\Models\PickupStore;
use App\Models\CountryTerm;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use stdClass;

ini_set('max_execution_time', 180); // 180 (seconds) = 3 Minutes




class InfoController extends Controller
{





    public function helpInfo(Request $request)
    {

        // 1: get data (help / contact)
        $response = new stdClass();
        $response->helpAndContactInfo = new stdClass();
        $response->helpAndContactInfo->contactInfo = new stdClass();




        // 1.1: contact
        $contact = CountryContact::where('countryId', 1)->first(); // SDN


        // 1.1: email / whatsapp
        $response->helpAndContactInfo->contactInfo->whatsapp = new stdClass();
        $response->helpAndContactInfo->contactInfo->whatsapp->whatsappNum = strval($contact->whatsapp);
        $response->helpAndContactInfo->contactInfo->whatsapp->whatsappURL = $contact->whatsappURL;
        $response->helpAndContactInfo->contactInfo->emailAddress = $contact->email;





        // 1.2: contact numbers
        $phones = CountryPhone::where('countryId', 1)->get(); // SDN

        $contentArray = array();
        foreach ($phones as $phone) {

            array_push($contentArray, strval($phone->phone));

        } // end loop

        // ::prepare response
        $response->helpAndContactInfo->contactInfo->contactNumbers = $contentArray;








        // 1.3: terms
        $terms = CountryTerm::where('countryId', 1)->get(); // SDN

        $contentArray = array();
        foreach ($terms as $term) {

            $content = new stdClass();
            $content->id = strval($term->id);
            $content->title = $term->title;
            $content->titleAr = $term->titleAr;

            $content->content = $term->content;
            $content->contentAr = $term->contentAr;

            array_push($contentArray, $content);

        } // end loop

        // ::prepare response
        $response->helpAndContactInfo->contactInfo->termsAndConditions = $contentArray;








        // -----------------------------------------------------------------
        // -----------------------------------------------------------------
        // -----------------------------------------------------------------


        // 2: help info
        $response->helpAndContactInfo->helpInfo = new stdClass();


        // 2.1: help - media
        $media = MediaInformation::all()->first();

        $response->helpAndContactInfo->helpInfo->facebookURL = $media->facebookURL;
        $response->helpAndContactInfo->helpInfo->facebookID = $media->facebookID;
        $response->helpAndContactInfo->helpInfo->linkedinURL = $media->linkedinURL;
        $response->helpAndContactInfo->helpInfo->linkedinID = $media->linkedinID;
        $response->helpAndContactInfo->helpInfo->instagramURL = $media->instagramURL;
        $response->helpAndContactInfo->helpInfo->instagramID = $media->instagramID;
        $response->helpAndContactInfo->helpInfo->twitterURL = $media->twitterURL;
        $response->helpAndContactInfo->helpInfo->twitterID = $media->twitterID;
        $response->helpAndContactInfo->helpInfo->videoTitle = $media->videoTitle;
        $response->helpAndContactInfo->helpInfo->videoTitleAr = $media->videoTitleAr;
        $response->helpAndContactInfo->helpInfo->videoURL = $media->videoURL;
        $response->helpAndContactInfo->helpInfo->websiteURL = $media->websiteURL;




        // 2.3: interAddress
        $interAddress = AddressInformation::all()->first();

        if (boolval($interAddress->isActive) === false) {

            $response->helpAndContactInfo->helpInfo->interAddress = null;

        } else {

            $response->helpAndContactInfo->helpInfo->interAddress = new stdClass();
            $response->helpAndContactInfo->helpInfo->interAddress->address = $interAddress->address;
            $response->helpAndContactInfo->helpInfo->interAddress->addressImage = asset('storage/interAddress/' . $interAddress->image);
            $response->helpAndContactInfo->helpInfo->interAddress->latitude = strval($interAddress->latitude);
            $response->helpAndContactInfo->helpInfo->interAddress->longitude = strval($interAddress->longitude);


        } // end if







        // 2.4: about Nasra
        $aboutInfos = AboutInformation::all();

        $response->helpAndContactInfo->helpInfo->aboutNasra = new stdClass();


        $contentArray = array();
        foreach ($aboutInfos as $aboutInfo) {

            $content = new stdClass();
            $content->id = strval($aboutInfo->id);
            $content->title = $aboutInfo->title;
            $content->titleAr = $aboutInfo->titleAr;

            $content->content = $aboutInfo->content;
            $content->contentAr = $aboutInfo->contentAr;

            array_push($contentArray, $content);

        } // end loop

        // ::prepare response
        $response->helpAndContactInfo->helpInfo->aboutNasra = $contentArray;



        return response()->json($response, 200);

    } // end function






    // -----------------------------------------------------------------











    public function pickupDeliveryInfo(Request $request)
    {

        // 1: get data (payment / pickup / delivery)
        $response = new stdClass();

        $response->PickupAndDeliveryAndPaymentInfo = new stdClass();

        $response->PickupAndDeliveryAndPaymentInfo->paymentInfo = new stdClass();




        // 1: onlineBankingPayments
        $onlineBankingPayments = Payment::where('paymentType', 'ONLINEBANKINGPAYMENT')->get();

        $contentArray = array();
        foreach ($onlineBankingPayments as $onlineBankingPayment) {

            $content = new stdClass();
            $content->id = strval($onlineBankingPayment->id);
            $content->name = $onlineBankingPayment->name;
            $content->nameAr = $onlineBankingPayment->nameAr;

            $content->accountName = $onlineBankingPayment->accountName;
            $content->accountNumber = $onlineBankingPayment->accountNumber;


            $content->isForDelivery = boolval($onlineBankingPayment->isForDelivery);
            $content->isForPickup = boolval($onlineBankingPayment->isForPickup);
            $content->isForRefund = boolval($onlineBankingPayment->isForRefund);


            array_push($contentArray, $content);

        } // end loop


        // ::push to response
        $response->PickupAndDeliveryAndPaymentInfo->paymentInfo->onlineBankingPayments = $contentArray;





        // 2: atReceivingPayment
        $atReceivingPayments = Payment::where('paymentType', 'ATRECEIVINGPAYMENT')->get();


        $contentArray = array();
        foreach ($atReceivingPayments as $atReceivingPayment) {

            $content = new stdClass();
            $content->id = strval($atReceivingPayment->id);
            $content->name = $atReceivingPayment->name;
            $content->nameAr = $atReceivingPayment->nameAr;

            $content->accountName = $atReceivingPayment->accountName;
            $content->accountNumber = $atReceivingPayment->accountNumber;


            $content->isForDelivery = boolval($atReceivingPayment->isForDelivery);
            $content->isForPickup = boolval($atReceivingPayment->isForPickup);
            $content->isForRefund = boolval($atReceivingPayment->isForRefund);


            array_push($contentArray, $content);

        } // end loop



        // ::push to response
        $response->PickupAndDeliveryAndPaymentInfo->paymentInfo->atReceivingPayments = $contentArray;







        // 3: directPayments
        $directPayments = Payment::where('paymentType', 'DIRECTPAYMENT')->get();


        $contentArray = array();
        foreach ($directPayments as $directPayment) {

            $content = new stdClass();
            $content->id = strval($directPayment->id);
            $content->name = $directPayment->name;
            $content->nameAr = $directPayment->nameAr;

            $content->accountName = $directPayment->accountName;
            $content->accountNumber = $directPayment->accountNumber;


            $content->isForDelivery = boolval($directPayment->isForDelivery);
            $content->isForPickup = boolval($directPayment->isForPickup);
            $content->isForRefund = boolval($directPayment->isForRefund);


            array_push($contentArray, $content);

        } // end loop



        // ::push to response
        $response->PickupAndDeliveryAndPaymentInfo->paymentInfo->directPayments = $contentArray;





        // 4: paymentConditions
        $paymentConditions = PaymentCondition::all();


        $contentArray = array();
        foreach ($paymentConditions as $paymentCondition) {

            $content = new stdClass();
            $content->id = strval($paymentCondition->id);
            $content->title = $paymentCondition->title;
            $content->titleAr = $paymentCondition->titleAr;

            $content->content = $paymentCondition->content;
            $content->contentAr = $paymentCondition->contentAr;

            array_push($contentArray, $content);

        } // end loop



        // ::push to response
        $response->PickupAndDeliveryAndPaymentInfo->paymentInfo->termsAndConditions = $contentArray;



        // -----------------------------------------------------------------
        // -----------------------------------------------------------------
        // -----------------------------------------------------------------






        // 1.2: pickup information
        $response->PickupAndDeliveryAndPaymentInfo->pickupInfo = new stdClass();


        // 1.2.1: stores
        $stores = PickupStore::all();

        $contentArray = array();
        foreach ($stores as $store) {

            $content = new stdClass();
            $content->id = strval($store->id);
            $content->title = $store->title;
            $content->titleAr = $store->titleAr;

            $content->storeLocation = $store->desc;
            $content->storeLocationAr = $store->descAr;

            $content->latitude = strval($store->latitude);
            $content->longitude = strval($store->longitude);

            $content->isMainStore = boolval($store->isMainStore);

            $content->isMainStore = boolval($store->isMainStore);

            $content->mainPic = asset('storage/pickups') . '/' . $store->image;

            $content->collectingWorkingHours = $store->receivingTimes;
            $content->collectingWorkingHoursAr = $store->receivingTimesAr;

            $content->isPickupAtStoreBlocked = ! boolval($store->isActive);

            array_push($contentArray, $content);

        } // end loop

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->pickupInfo->stores = $contentArray;







        // 1.2.2: conditions
        $conditions = PickupCondition::all();

        $contentArray = array();
        foreach ($conditions as $condition) {

            $content = new stdClass();
            $content->id = strval($condition->id);
            $content->title = $condition->title;
            $content->titleAr = $condition->titleAr;

            $content->content = $condition->content;
            $content->contentAr = $condition->contentAr;

            array_push($contentArray, $content);

        } // end loop

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->pickupInfo->termsAndConditions = $contentArray;







        // 1.2.3: isPickupBlocked
        $isPickupActive = GeneralSetting::all()->first()->isPickupActive;

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->pickupInfo->isPickupBlocked = ! boolval($isPickupActive);








        // -----------------------------------------------------------------
        // -----------------------------------------------------------------
        // -----------------------------------------------------------------





        // 1.3: delivery information
        $response->PickupAndDeliveryAndPaymentInfo->deliveryInfo = new stdClass();





        // 1.3.1: conditions
        $conditions = DeliveryCondition::all();

        $contentArray = array();
        foreach ($conditions as $condition) {

            $content = new stdClass();
            $content->id = strval($condition->id);
            $content->title = $condition->title;
            $content->titleAr = $condition->titleAr;

            $content->content = $condition->content;
            $content->contentAr = $condition->contentAr;

            array_push($contentArray, $content);

        } // end loop

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->deliveryInfo->termsAndConditions = $contentArray;







        // 1.2.2: isDeliveryBlocked
        $isDeliveryActive = GeneralSetting::all()->first()->isDeliveryActive;

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->deliveryInfo->isDeliveryBlocked = ! boolval($isDeliveryActive);






        // -----------------------------------------------------------------
        // -----------------------------------------------------------------
        // -----------------------------------------------------------------






        // 1.3: isOrderingBlocked
        $isOrderingActive = GeneralSetting::all()->first()->isOrderingActive;

        // ::prepare response
        $response->PickupAndDeliveryAndPaymentInfo->isOrderingBlocked = ! boolval($isOrderingActive);





        // 1.4: isSDNOrderingBlocked / isUKOrderingBlocked / isIRLOrderingBlocked
        $country = Country::find(1);
        $response->isSDNOrderingBlocked = ! boolval($country->isOrderingActive);

        $country = Country::find(2);
        $response->isUKOrderingBlocked = ! boolval($country->isOrderingActive);

        $country = Country::find(3);
        $response->isIRLOrderingBlocked = ! boolval($country->isOrderingActive);






        return response()->json($response, 200);


    } // end function





} // end controller
