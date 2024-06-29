<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Models\UserPasswordReset;
use App\Models\UserPhoneReset;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use stdClass;

class UserEditController extends Controller {





    public function resetPasswordOTP(Request $request) {


        // :: root
        $response = new stdClass();
        $response->errors = array();

        $expireTime = 1;
        $expireDelete = false;


        // ::root - convert array to objects
        $request = (object) $request->all();
        $request->isArSMS == true ? $lang = "arabic" : $lang = "english";



        // 1.1: Phone / checkValid
        $userPhone = strval($request->phoneNumber);



        // 1.2: get user
        $user = User::where('phone', $userPhone)->first();



        // :1.3: check existence / isActive
        if (!$user) {

            $response->errors[0] = "18";
            return response()->json($response);

        } // end if


        if (boolval($user->isActive) === false) {

            $response->errors[0] = "19";
            return response()->json($response);

        } // end if






        // 2: check duplicated
        $isDuplicated = UserPasswordReset::where('phone', $userPhone)->count();

        if ($isDuplicated >= 1) {

            $userPasswordLead = UserPasswordReset::where('phone', $userPhone)->first();

            $todayDate = new DateTime();

            $previousDate = $userPasswordLead->created_at;

            $timeDiff = $todayDate->diff($previousDate);

            // :: get the minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            // :: flag as expired / token not-expired
            if ($minutes > $expireTime) {

                $expireDelete = true;

            } else {

                $response->errors[0] = "14";
                return response()->json($response);

            } // end if



        } // end if







        // ==================================
        // ==================================







        // 3: send-otp
        $otpResponse = $this->sendPasswordOTP($userPhone, $lang, $expireDelete);




        // 3.2: handle otp - errors / success response
        if (!empty($otpResponse->errors)) {

            $response->errors = $otpResponse->errors;

        } else {


            $response = new stdClass();
            $response->verificationCode = strval($otpResponse->otp);

        } // end if




        // :: prepare response
        return response()->json($response);



    } // end of function








    // -----------------------------------------------------------------








    public function resendResetPasswordOTP(Request $request) {



        // :: root
        $response = new stdClass();
        $response->errors = array();
        $expireTime = 1;


        // ::root - convert array to objects
        $request = (object) $request->all();
        $request->isArSMS == true ? $lang = "arabic" : $lang = "english";



        // 1.1: Phone / checkValid
        $userPhone = strval($request->phoneNumber);



        // 1.2: get user
        $user = User::where('phone', $userPhone)->first();



        // :1.3: check existence / isActive
        if (!$user) {

            $response->errors[0] = "18";
            return response()->json($response);

        } // end if


        if (boolval($user->isActive) === false) {

            $response->errors[0] = "19";
            return response()->json($response);

        } // end if













        // 2: check duplicated
        $isDuplicated = UserPasswordReset::where('phone', $userPhone)->count();

        if ($isDuplicated >= 1) {

            $userPasswordLead = UserPasswordReset::where('phone', $userPhone)->first();

            $todayDate = new DateTime();

            $previousDate = $userPasswordLead->created_at;

            $timeDiff = $todayDate->diff($previousDate);

            // :: get the minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            // :: otp expired
            if ($minutes > $expireTime) {

                UserPasswordReset::where('phone', $userPhone)->delete();

                $response->errors[0] = "12";
                return response()->json($response);

            } // end if



        // 2.2: Not-found
        } else {

            $response->errors[0] = "12";
            return response()->json($response);

        } // end if







        // ==================================
        // ==================================






        // 3: send-otp
        $otpResponse = $this->resendPasswordOTP($userPhone, $lang);




        // 3.2: handle otp - errors / success response
        if (!empty($otpResponse->errors)) {

            $response->errors = $otpResponse->errors;

        } else {


            $response = new stdClass();
            $response->verificationCode = strval($otpResponse->otp);

        } // end if




        // :: prepare response
        return response()->json($response);




    } // end function














    // -----------------------------------------------------------------









    public function confirmResetPasswordOTP(Request $request) {


        // :: root
        $response = new stdClass();
        $response->errors = array();
        $expireTime = 1;
        $isOtpConfirmed = false;


        // ::root - convert array to objects
        $request = (object) $request->all();




        // 1: get phone / otp
        $userPhone = $request->phoneNumber;
        $otpCode = $request->enteredVerificationCode;







        // 2- check if otp  expired
        $userPasswordLead = UserPasswordReset::where('phone', $userPhone)->first();


        // 2.1: check existence
        if ($userPasswordLead) {


            $todayDate = new DateTime();
            $previousDate = $userPasswordLead->created_at;

            $timeDiff = $todayDate->diff($previousDate);

            // :: get minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            // :: if expired
            if ($minutes > $expireTime) {

                // :: remove from-db
                UserPasswordReset::where('phone', $userPhone)->delete();

                $response->errors[0] = "12";
                return response()->json($response);

            } // end if





        // 2.2: Not Found
        } else {

            $response->errors[0] = "12";

            return response()->json($response);

        } // end if








        // ======================================
        // ======================================







        // 3: check if confirmed-already
        if (boolval($userPasswordLead->isConfirmed) === true) {


            $response = new stdClass();
            $response->validOTP = true;

            return response()->json($response);

        } // end if





        // 3.2: => check otp-match - update DB
        if ($otpCode == $userPasswordLead->otp) {

            $response = new stdClass();
            $response->validOTP = true;

            UserPasswordReset::where('phone', $userPhone)->update([
                'isConfirmed'=> true
            ]);

            return response()->json($response);



        // 3.3: not-valid
        } else {

            $response->errors[0] = "13";

            return response()->json($response);

        } // end if




    } // end of function








    // -----------------------------------------------------------------











    public function resetPassword(Request $request) {


        // :: root
        $response = new stdClass();
        $response->errors = array();
        $expireTime = 3;


        // ::root - convert array to objects
        $request = (object) $request->all();




        // 1: get phone / new Password
        $userPhone = $request->phoneNumber;
        $newPassword = $request->newPassword;




        // 2: check expiry - 30 minutes
        $userPasswordLead = UserPasswordReset::where('phone', $userPhone)->first();


        // 2.1: is confirmed
        if ($userPasswordLead && boolval($userPasswordLead->isConfirmed) === true) {



            // 2.1.1: check expiry
            $todayDate = new DateTime();

            $previousDate = $userPasswordLead->updated_at;
            $timeDiff = $todayDate->diff($previousDate);

            // :: get minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;

            if ($minutes > $expireTime) {

                UserPasswordReset::where('phone', $userPhone)->delete();

                $response->errors[0] = "20";
                return response()->json($response);

            } // end if







            // 3: Update Password
            $user = User::where('phone', $userPhone)->first();

            $user->password = Hash::make($newPassword);
            $user->save();


            // 4: remove Old-data
            UserPasswordReset::where('phone', $userPhone)->delete();




            // 5: return User Modal
            $content = new stdClass();
            $content->id = $user->id;



            $content->firstName = $user->firstName;
            $content->lastName = $user->lastName;
            $content->emailAddress = $user->email;

            //remove 249 from phone number
            $phone = substr($user->phone, 3);

            $content->phoneNumber = strval($phone);



            $content->userAddress = new stdClass();

            $content->userAddress->userStateId = strval($user->stateId);
            $content->userAddress->userRegionId = strval($user->deliveryRegionId);

            $content->userAddress->addressDescription = $user->address;
            $content->userAddress->deliveryEstimatedTime = $user->deliveryRegion->deliveryTime->content;
            $content->userAddress->deliveryEstimatedTimeAr = $user->deliveryRegion->deliveryTime->contentAr;

            $content->userAddress->regionDeliveryPrice = strval($user->deliveryRegion->price);
            $content->userAddress->isDeliveryBlocked = !boolval($user->deliveryRegion->isActive);



            // 3.1: Create Token
            $token = $user->createToken('AppToken', ['role:user'])->plainTextToken;

            // ::prepare response
            $response = new stdClass();
            $response->user = $content;
            $response->token = $token;



            // return response in json
            return response()->json($response);

        } //end of otp confirmed and updated





    } // end of function





    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------














    public function sendPasswordOTP($userPhone, $lang, $expireDelete) {

        // :: root
        $otpResponse = new stdClass();
        $token = env('SMS_TOKEN');
        $otpMessage = Message::where('isFor', 'PHONE')->first();


        $otpCode = mt_rand(1000, 9999);



        // 1: check if otp unique
        while(true) {

            $otpDuplicated = UserPasswordReset::where('otp', $otpCode)->count();

            // 1.2: re-generate
            if ($otpDuplicated  > 0) $otpCode = mt_rand(1000, 9999); else break;

        } // end while




        $messageBody = $this->addCodeToContent($otpMessage, $otpCode, $lang);




            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $token
            ])->post('https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', [
                'from' => 'Nasra', // 11 char max
                'to' => '+' . $userPhone, // +249 99 959 0002
                'body' => $messageBody, // 70 char per message - 160 (latin)
            ]);








        // 3: remove from-db
        if ($expireDelete === true) {

            UserPasswordReset::where('phone', $userPhone)->delete();

        } // end if



        // 3.2: append to-db
        $userPasswordLead = new UserPasswordReset();

        $userPasswordLead->phone = $userPhone;
        $userPasswordLead->otp = $otpCode;

        $userPasswordLead->save();



        // ::prepare response
        $otpResponse->otp = $otpCode;


        return $otpResponse;




    } // end function





    // -----------------------------------------------------------------







    public function resendPasswordOTP($userPhone, $lang) {

        // :: root
        $otpResponse = new stdClass();
        $token = env('SMS_TOKEN');
        $otpMessage = Message::where('isFor', 'PHONE')->first();


        $userPasswordLead = UserPasswordReset::where('phone', $userPhone)->first();
        $otpCode = $userPasswordLead->otp;



        $messageBody = $this->addCodeToContent($otpMessage, $otpCode, $lang);


            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $token
            ])->post('https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', [
                'from' => 'Nasra', // 11 char max
                'to' => '+' . $userPhone, // +249 99 959 0002
                'body' => $messageBody, // 70 char per message - 160 (latin)
            ]);











        // ::prepare response
        $otpResponse->otp = $otpCode;


        return $otpResponse;




    } // end function



















    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------








    public function changeNumberOTP(Request $request) {


        // :: root
        $response = new stdClass();
        $response->errors = array();
        $expireDelete = false;
        $expireTime = 1;


        // ::root - convert array to objects
        $request = (object) $request->all();
        $request->isArSMS == true ? $lang = "arabic" : $lang = "english";



        // 1: get user / password / newPhone
        $user = User::find(auth()->user()->id);

        $password = $request->password;
        $newPhone = strval($request->newPhoneNumber);




        // 1.1: Phone isValid
        $isPhoneValid = $this->checkPhone($newPhone);

        if ($isPhoneValid === false) {

            $response->errors[0] = "3";
            return response()->json($response);

        } // end if




        // 1.2: check existence
        $isPhoneUsed = User::where('phone', $newPhone)->count();

        if ($isPhoneUsed > 0) {

            $response->errors[0] = "4";
            return response()->json($response);

        } // end if





        // 1.3: check if passwords match
        if (!Hash::check($password, $user->password)) {

            $response->errors[0] = "21";
            return response()->json($response);

        } // end if





        // 1.4: existence in Reset DB => if yes check timeout
        $isDuplicated = UserPhoneReset::where('userId', $user->id)->count();


        if ($isDuplicated >= 1) {

            $userPhoneLead = UserPhoneReset::where('userId', $user->id)->first();

            $todayDate = new DateTime();

            $previousDate = $userPhoneLead->created_at;
            $timeDiff = $todayDate->diff($previousDate);

            // :: get minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            // :: flag to-delete
            if ($minutes > $expireTime) {

                $expireDelete = true;


            // :: already waiting list
            } else {

                $response->errors[0] = "14";
                return response()->json($response);

            } // end if



        } // end if







        // ============================
        // ============================







        // 2: send-otp
        $otpResponse = $this->sendPhoneOTP($newPhone, $lang, $expireDelete, $user->id);



        // 2.2: handle otp - errors / success response
        if (!empty($otpResponse->errors)) {

            $response->errors = $otpResponse->errors;

        } else {


            $response = new stdClass();
            $response->verificationCode = strval($otpResponse->otp);

        } // end if




        // :: prepare response
        return response()->json($response);




    } // end function












    // -----------------------------------------------------------------








    public function resendChangeNumberOTP(Request $request) {

        // :: root
        $response = new stdClass();
        $response->errors = array();
        $expireTime = 1;


        // ::root - convert array to objects
        $request = (object) $request->all();
        $request->isArSMS == true ? $lang = "arabic" : $lang = "english";



        // 1: get user / password / newPhone
        $user = User::find(auth()->user()->id);

        //$password = $request->password;
        $newPhone = strval($request->newPhoneNumber);





        // 1.1: check if not-active
        if (boolval($user->isActive) === false) {

            $response->errors[0] = "15";
            return response()->json($response);

        } // end if






        // 2: otp expiry
        $userPhoneLead = UserPhoneReset::where('phone', $newPhone)->first();




        // 2.1: if exist
        if ($userPhoneLead) {


            $todayDate = new DateTime();

            $previousDate = $userPhoneLead->created_at;
            $timeDiff = $todayDate->diff($previousDate);

            // :: get minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            if ($minutes > $expireTime) {

                UserPhoneReset::where('phone', $newPhone)->delete();

                $response->errors[0] = "12";
                return response()->json($response);

            } // end if




        // 2.2: Not Found
        } else {

            $response->errors[0] = "12";
            return response()->json($response);

        } // end if








        // =============================
        // =============================








        // 3: send-otp
        $otpResponse = $this->resendPhoneOTP($newPhone, $lang);




        // 3.1: handle otp - errors / success response
        if (!empty($otpResponse->errors)) {

            $response->errors = $otpResponse->errors;

        } else {


            $response = new stdClass();
            $response->verificationCode = strval($otpResponse->otp);

        } // end if



        // :: prepare response
        return response()->json($response);




    } // end function










    // -----------------------------------------------------------------








    public function confirmChangeNumberOTP(Request $request) {


        // :: root
        $response = new stdClass();
        $response->errors = array();
        $isOtpConfirmed = false;
        $expireTime = 1;


        // ::root - convert array to objects
        $request = (object) $request->all();



        // 1: get user / password / newPhone
        $user = User::find(auth()->user()->id);

        $newPhone = strval($request->newPhoneNumber);
        $otpCode = $request->enteredVerificationCode;





        // 1.2: resetUser
        $userPhoneLead = UserPhoneReset::where('phone', $newPhone)->first();


        // 1.3: if exists
        if ($userPhoneLead) {

            $todayDate = new DateTime();

            $previousDate = $userPhoneLead->created_at;
            $timeDiff = $todayDate->diff($previousDate);

            // :: get minutes
            $minutes = $timeDiff->days * 24 * 60;
            $minutes += $timeDiff->h * 60;
            $minutes += $timeDiff->i;


            if ($minutes > $expireTime) {


                // :: remove from-db
                UserPhoneReset::where('phone', $newPhone)->delete();

                $response->errors[0] = "12";
                return response()->json($response);

            } // end if





        // 1.4: Not-Found
        } else {

            $response->errors[0] = "12";
            return response()->json($response);

        } // end if








        // ============================
        // ============================





        // 2: check if otp-matched / mismatch
        if ($otpCode == $userPhoneLead->otp) {


            // ::prepare response
            $response = new stdClass();
            $response->newPhoneNumber = strval($newPhone);


            // 2.1: update userPhone
            $user->phone = $newPhone;
            $user->save();


            // 2.2: remove from phoneReset
            UserPhoneReset::where('phone', $newPhone)->delete();

            return response()->json($response);


        } else {

            $response->errors[0] = "13";

            return response()->json($response);

        } // end if



    } // end function





    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------







    public function sendPhoneOTP($newPhone, $lang, $expireDelete, $userId) {


        // :: root
        $otpResponse = new stdClass();
        $token = env('SMS_TOKEN');
        $otpMessage = Message::where('isFor', 'PHONE')->first();


        $otpCode = mt_rand(1000, 9999);



        // 1: check if otp unique
        while(true) {

            $otpDuplicated = UserPhoneReset::where('otp', $otpCode)->count();

            // 1.2: re-generate
            if ($otpDuplicated  > 0) $otpCode = mt_rand(1000, 9999); else break;

        } // end while




        $messageBody = $this->addCodeToContent($otpMessage, $otpCode, $lang);


        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $token
            ])->post('https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', [
                'from' => 'Nasra', // 11 char max
                'to' => '+' . $newPhone, // +249 99 959 0002
                'body' => $messageBody, // 70 char per message - 160 (latin)
            ]);





        // 3: remove from-db
        if ($expireDelete === true) {

            UserPhoneReset::where('userId', $userId)->delete();

        } // end if




        // 3.2: append to-db
        $userPhoneLead = new UserPhoneReset();

        $userPhoneLead->userId = $userId;
        $userPhoneLead->phone = $newPhone;
        $userPhoneLead->otp = $otpCode;

        $userPhoneLead->save();



        // ::prepare response
        $otpResponse->otp = $otpCode;


        return $otpResponse;




    } // end function










    // -----------------------------------------------------------------






    public function resendPhoneOTP($newPhone, $lang) {

        // :: root
        $otpResponse = new stdClass();
        $token = env('SMS_TOKEN');
        $otpMessage = Message::where('isFor', 'PHONE')->first();


        $userPhoneLead = UserPhoneReset::where('phone', $newPhone)->first();
        $otpCode = $userPhoneLead->otp;





        $messageBody = $this->addCodeToContent($otpMessage, $otpCode, $lang);



        $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $token
            ])->post('https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', [
                'from' => 'Nasra', // 11 char max
                'to' => '+' . $newPhone, // +249 99 959 0002
                'body' => $messageBody, // 70 char per message - 160 (latin)
            ]);




        // ::prepare response
        $otpResponse->otp = $otpCode;


        return $otpResponse;





    } // end function





    public function addCodeToContent($messageRecord, $code, $lang){

        //check if the lang is english or arabic
        $messageContent = $lang == 'english' ? $messageRecord->content ?? null : $messageRecord->contentAr ?? null;


        $sliceContent = explode( '@verCode', $messageContent );

        //add the code to content and check if there content after code
        $content =  count($sliceContent) == 1 ? $sliceContent[0] . $code : $sliceContent[0] . $code . $sliceContent[1];

       return $content;
    }


    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------




    public function changeEmail(Request $request) {


        // ::root
        $response = new stdClass();
        $response->errors = array();



        // ::root - convert array to objects
        $request = (object) $request->all();


        // 1: get user / email
        $user = User::find(auth()->user()->id);
        $newEmail = $request->newEmailAddress;


        // 1.2: check email if used
        $checkEmail = User::where('email',$newEmail)->get();

        if ($checkEmail->count() > 0) {

            $response->errors[0] = "5";
            return response()->json($response);

        }





        // 1.2: user not-active
        if (boolval($user->isActive) === false) {

            $response->errors[0] = "15";
            return response()->json($response);

        } // end if




        // 1.3: same-email
        if ($user->email == $newEmail) {

            $response->errors[0] = "5";
            return response()->json($response);

        } // end if







        // 2: update Email
        $user->email = $newEmail;
        $user->save();




        // ::prepare response
        $response = new stdClass();
        $response->newEmailAddress = $newEmail;



        return response()->json($response);

    } // end of function







    // -----------------------------------------------------------------










    public function changePassword(Request $request) {



        // ::root
        $response = new stdClass();
        $response->errors = array();



        // ::root - convert array to objects
        $request = (object) $request->all();


        // 1: get user / email
        $user = User::find(auth()->user()->id);
        $oldPassword = $request->password;
        $newPassword = $request->newPassword;




        // 1.2: user not-active
        if (boolval($user->isActive) === false) {

            $response->errors[0] = "15";
            return response()->json($response);

        } // end if




        // 1.3: isPasswordMatched
        if (Hash::check($oldPassword, $user->password)) {


            // 1.3.1: update user-password
            $user->password = Hash::make($newPassword);
            $user->save();


            // ::prepare response
            $response = new stdClass();
            $response->validPassword = true;

            return response()->json($response);



        // 1.4: Not Matched
        }  else {


            $response->errors[0] = "21";
            return response()->json($response);

        } // end if




    } // end function








    // -----------------------------------------------------------------







    public function changeAddress(Request $request) {


        // ::root
        $response = new stdClass();
        $response->errors = array();



        // ::root - convert array to objects
        $request = (object) $request->all();


        // 1: get user / regionId + stateId + address
        $user = User::find(auth()->user()->id);

        $stateId = $request->userStateId;
        $regionId = $request->userRegionId;
        $address = $request->addressDescription;



        // 1.2: is address available
        if (empty($address)) {

            $response->errors[0] = "9";
            return response()->json($response);

        } // end if





        // 1.3: update DB
        $user->stateId = $stateId;
        $user->deliveryRegionId = $regionId;
        $user->address = $address;

        $user->save();










        // ::prepare userModal
        $content = new stdClass();
        $content->userAddress = new stdClass();

        $content->userAddress->userStateId = strval($user->stateId);
        $content->userAddress->userRegionId = strval($user->deliveryRegionId);
        $content->userAddress->addressDescription = $user->address;

        $content->userAddress->deliveryEstimatedTime = $user->deliveryRegion->deliveryTime->content;
        $content->userAddress->deliveryEstimatedTimeAr = $user->deliveryRegion->deliveryTime->contentAr;

        // ::deliveryTime Object
        // $content->userAddress->deliveryEstimatedTime = new stdClass();
        // $content->userAddress->deliveryEstimatedTime->title = $user->deliveryRegion->deliveryTime->title;
        // $content->userAddress->deliveryEstimatedTime->titleAr = $user->deliveryRegion->deliveryTime->titleAr;
        // $content->userAddress->deliveryEstimatedTime->content = $user->deliveryRegion->deliveryTime->content;
        // $content->userAddress->deliveryEstimatedTime->contentAr = $user->deliveryRegion->deliveryTime->contentAr;



        $content->userAddress->regionDeliveryPrice = strval($user->deliveryRegion->price);
        $content->userAddress->isDeliveryBlocked = !boolval($user->deliveryRegion->isActive);



        return response()->json($content);



    } // end function





    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------
    // -----------------------------------------------------------------






    protected function checkPhone($userPhone) {

        // ::root
        $userPhone = strval($userPhone);



        // 1: check length => (must be 12 - eg : 249 99 959 0002)
        if (strlen($userPhone) != 12) return false; else return true;


    } //end of check phone

















} // end controller
