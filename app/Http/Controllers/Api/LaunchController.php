<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\CategoryPicture;
use App\Models\Company;
use App\Models\Country;
use App\Models\deliveryRegion;
use App\Models\GeneralSetting;
use App\Models\Product;
use App\Models\State;
use App\Models\Unit;
use App\Models\UserDevice;
use App\Models\UserFavorite;
use Illuminate\Http\Request;
use stdClass;

ini_set('max_execution_time', 180); // 180 (seconds) = 3 Minutes



class LaunchController extends Controller
{



   public function launch(Request $request)
   {

      // :root
      $response = new stdClass();
      $batch = $request->batch;
      $request->favData = (object) $request->favData;


      // 1: first action
      str_contains($batch, '1,') ? $response = $this->firstAction($response) : null;


      // 2: sec action
      str_contains($batch, '2,') ? $response = $this->secAction($response) : null;


      // 3: third action
      str_contains($batch, '3,') ? $response = $this->thirdAction($response) : null;



      // 4: fourth action
      str_contains($batch, '4,') ? $response = $this->fourthAction($response) : null;


      // 5: fifth action
      str_contains($batch, '5,') ? $response = $this->fifthAction($response) : null;


      // 6: sixth action
      str_contains($batch, '6,') ? $response = $this->sixthAction($response) : null;


      // 7: seventh action
      str_contains($batch, '7,') ? $response = $this->seventhAction($response) : null;







      // ======================================
      // ======================================







      // 8: seventh action - favData
      $products = Product::whereIn('id', $request->favData->productsID)->where('isHidden', false)->get();
      $contentArray = array();




      // 8.1: ProductsID is returned (in both options)
      foreach ($products as $product) {

         $content = new stdClass();
         $content->id = strval($product->id);
         $content->categoryId = strval($product->categoryId);
         $content->subCategoryId = strval($product->subCategoryId);
         $content->typeId = strval($product->typeId);
         $content->companyId = strval($product->companyId);


         $content->name = $product->name;
         $content->nameAr = $product->nameAr;

         $content->mainPic = url('storage/products') . '/' . $product->imageFile;
         $content->additionalPics = null;




         // ::determine productType (byName - fixedSize - dynamicSize)
         $content->productType = strval($product->weightOption);


         $content->measuringUnitId = strval($product->unitId);
         $content->minQuantityToOrder = $product->weightOption == 'Dynamic' ? strval(number_format($product->weight, 2, '.', '')) : '1.00';

         // :: determine packSize
         $content->packSize = $product->weightOption == 'Namefull' ? null : strval($product->weight);


         $content->quantityAvailable = strval(number_format($product->quantity, 2, '.', ''));
         $content->maxQuantityToOrder = strval(number_format($product->maxQuantityPerOrder, 2, '.', ''));
         $content->originalPrice = strval($product->sellPrice);
         $content->offerPrice = strval($product->offerPrice);

         $content->desc = $product->information;
         $content->descAr = $product->informationAr;


         array_push($contentArray, $content);
      } // end loop







      // 8.2: auth
      if (!empty(auth()->user())) {


         // 8.2.1: check if device duplicated
         $isDuplicated = UserDevice::where('userId', auth()->user()->id)
            ->where('serial', $request->favData->deviceID)->count();








         // 8.2.2: determine deviceID / FavoriteList actions
         if ($isDuplicated > 0) {



            // 8.2.3: remove previous favorites / update with ProductsIDs
            UserFavorite::where('userId', auth()->user()->id)->delete();

            foreach ($products as $product) {

               $userFavorite = new UserFavorite();
               $userFavorite->userId = auth()->user()->id;
               $userFavorite->productId = strval($product->id);

               $userFavorite->save();
            } // end loop




         } else {


            // ::root -> Save deviceID
            $userDevice = new UserDevice();
            $userDevice->userId = auth()->user()->id;
            $userDevice->serial = strval($request->favData->deviceID);

            $userDevice->save();





            // 8.2.4: Favorites is returned / appended later on to returned
            $favoritesID = UserFavorite::where('userId', auth()->user()->id)->get(['productId'])->toArray();
            $favoriteProducts = Product::whereIn('id', $favoritesID)->where('isHidden', false)->get();




            // 4.2.5: ProductsIDs appended in favorites
            foreach ($products->whereNotIn('id', $favoritesID) as $product) {

               $userFavorite = new UserFavorite();
               $userFavorite->userId = auth()->user()->id;
               $userFavorite->productId = strval($product->id);

               $userFavorite->save();
            } // end loop







            // 4.2.4: favorites appended in returned
            foreach ($favoriteProducts as $product) {

               $content = new stdClass();
               $content->id = strval($product->id);
               $content->categoryId = strval($product->categoryId);
               $content->subCategoryId = strval($product->subCategoryId);
               $content->typeId = strval($product->typeId);
               $content->companyId = strval($product->companyId);


               $content->name = $product->name;
               $content->nameAr = $product->nameAr;

               $content->mainPic = url('storage/products') . '/' . $product->imageFile;
               $content->additionalPics = null;




               // ::determine productType (byName - fixedSize - dynamicSize)
               $content->productType = $product->weightOption;


               $content->measuringUnitId = strval($product->unitId);
               $content->minQuantityToOrder = $product->weightOption == 'Dynamic' ? strval(number_format($product->weight, 2, '.', '')) : '1.00';

               // :: determine packSize
               $content->packSize = $product->weightOption == 'Namefull' ? null : strval($product->weight);



               $content->quantityAvailable = strval(number_format($product->quantity, 2, '.', ''));
               $content->maxQuantityToOrder = strval(number_format($product->maxQuantityPerOrder, 2, '.', ''));
               $content->originalPrice = strval($product->sellPrice);
               $content->offerPrice = strval($product->offerPrice);

               $content->desc = $product->information;
               $content->descAr = $product->informationAr;


               array_push($contentArray, $content);
            } // end loop



         } // end else





      } // end if





      // :: prepare response
      $response->favProducts = $contentArray;



      return response()->json($response, 200);
   } // end function





   // -----------------------------------------------------------------


   public function firstAction($response)
   {

      // 1: get data
      $generalBlocks = GeneralSetting::all()->first();

      $response->isOrderingBlocked = !boolval($generalBlocks->isOrderingActive);

      return $response;
   } // end function





   // -----------------------------------------------------------------


   public function secAction($response)
   {

      $response->adsOffers = new stdClass();
      // 1: get data

      // 1.1: offers products available
      $offersCount = Product::where('isHidden', false)
         ->where('offerPrice', '>=', 0)->count();

      $response->adsOffers->isThereProductsInOfferAndDiscounts = boolval($offersCount > 0);

      // A- get the square ads
      $squareAds = Advertisement::where('type', 'Square')
         ->where('isActive', true)
         ->get();


      $contentArray = array();

      foreach ($squareAds as $ad) {

         $content = new stdClass();

         $content->image = url('storage/help/ads') . '/' . $ad->imageFile;
         $content->imageAr = url('storage/help/ads') . '/' . $ad->imageFileAr;


         // 1.4: push mainCategory into categories array
         array_push($contentArray, $content);
      }


      $response->adsOffers->squareAds = $contentArray;



      // A- get the rectangle ads
      $squareAds = Advertisement::where('type', 'Rectangle')
         ->where('isActive', true)
         ->get();

      $contentArray = array();

      foreach ($squareAds as $ad) {

         $content = new stdClass();

         $content->image = url('storage/help/ads') . '/' . $ad->imageFile;
         $content->imageAr = url('storage/help/ads') . '/' . $ad->imageFileAr;


         // 1.4: push mainCategory into categories array
         array_push($contentArray, $content);
      }

      $response->adsOffers->rectangleAds = $contentArray;



      return $response;
   } // end function






   // -----------------------------------------------------------------


   public function thirdAction($response)
   {

      // 0.5: categories images
      $categoriesImages = CategoryPicture::find(1);

      $response->categoriesPageImage = url('storage/categories/covers/') . '/' . $categoriesImages?->imageFile;
      $response->categoriesPageImageAr = url('storage/categories/covers/') . '/' . $categoriesImages?->imageFileAr;


      // 1: get data

      // 1.1: main-categories inside subs / types
      $mainCategories = Category::orderBy('index')->get();
      $contentArray = array();

      foreach ($mainCategories as $mainCategory) {

         $content = new stdClass();
         $content->id = strval($mainCategory->id);
         $content->name = $mainCategory->name;
         $content->nameAr = $mainCategory->nameAr;
         $content->image = url('storage/categories') . '/' . $mainCategory->imageFile;
         $content->subCategories = array();



         // 1.2: insert subCategories
         $counterOne = 0;
         foreach ($mainCategory->subCategories->sortBy('index') as $subCategory) {

            // check if subCategory has types
            if ($subCategory?->types?->count() > 0) {

               $content->subCategories[$counterOne] = new stdClass();

               $content->subCategories[$counterOne]->id = strval($subCategory->id);
               $content->subCategories[$counterOne]->name = $subCategory->name;
               $content->subCategories[$counterOne]->nameAr = $subCategory->nameAr;

               $content->subCategories[$counterOne]->types = array();




               // 1.3: insert types
               $counterTwo = 0;
               foreach ($subCategory?->types?->sortBy('index') as $type) {


                  // check if type has products and its not hidden
                  if ($type?->products?->where('isHidden', false)->count() > 0) {

                     $content->subCategories[$counterOne]->types[$counterTwo] = new stdClass();

                     $content->subCategories[$counterOne]->types[$counterTwo]->id = strval($type->id);
                     $content->subCategories[$counterOne]->types[$counterTwo]->name = $type->name;
                     $content->subCategories[$counterOne]->types[$counterTwo]->nameAr = $type->nameAr;

                     // ::inc counterTwo
                     $counterTwo++;
                  } //end of if subCategory has types


               } // end loop



               // ::inc counterOne
               $counterOne++;
            } //end of if subCategory has types


         } // end inner loop



         // 1.4: push mainCategory into categories array
         array_push($contentArray, $content);
      } // end loop





      // 1.5: prepare categories
      $response->categories = $contentArray;


      return $response;
   } // end function









   // -----------------------------------------------------------------


   public function fourthAction($response)
   {

      // 1: get data

      // 1.1: home Products
      $products = Product::where('isMainPage', true)
         ->where('isHidden', false)
         ->orderBy('indexMainPage')
         ->get();



      $contentArray = array();
      foreach ($products as $product) {

         $content = new stdClass();
         $content->id = strval($product->id);
         $content->categoryId = strval($product->categoryId);
         $content->subCategoryId = strval($product->subCategoryId);
         $content->typeId = strval($product->typeId);
         $content->companyId = strval($product->companyId);


         $content->name = $product->name;
         $content->nameAr = $product->nameAr;

         $content->mainPic = url('storage/products') . '/' . $product->imageFile;
         $content->additionalPics = null;




         // :: determine productType (byName - fixedSize - dynamicSize)
         $content->productType = strval($product->weightOption);


         $content->measuringUnitId = strval($product->unitId);
         $content->minQuantityToOrder = $product->weightOption == 'Dynamic' ? strval(number_format($product->weight, 2, '.', '')) : '1.00';

         // :: determine packSize
         $content->packSize = $product->weightOption == 'Namefull' ? null : strval($product->weight);


         $content->quantityAvailable = strval(number_format($product->quantity, 2, '.', ''));
         $content->maxQuantityToOrder = strval(number_format($product->maxQuantityPerOrder, 2, '.', ''));
         $content->originalPrice = strval($product->sellPrice);
         $content->offerPrice = strval($product->offerPrice);

         $content->desc = $product->information;
         $content->descAr = $product->informationAr;


         array_push($contentArray, $content);
      } // end loop


      // ::prepare response
      $response->homeProducts = $contentArray;


      return $response;
   } // end function










   // -----------------------------------------------------------------


   public function fifthAction($response)
   {

      // 1: get data
      $countries = Country::where('id', '>', 1)->get();



      $contentArray = array();

      // 1.2: loop foreign countries
      foreach ($countries as $country) {

         $content = new stdClass();

         $content->lettersCode = $country->code;
         $content->toSDG = strval($country->toSDG);
         $content->isActive = boolval($country->isServiceActive);
         $content->isCountryOrderingBlocked = !boolval($country->isOrderingActive);






         // 1.3: terms / contacts / email / whatsapp
         $content->contactInfo = new stdClass();



         // 1.3.1: terms
         $content->contactInfo->termsAndConditions = array();



         foreach ($country->terms as $term) {

            $contentTwo = new stdClass();

            $contentTwo->title = $term->title;
            $contentTwo->titleAr = $term->titleAr;
            $contentTwo->content = $term->content;
            $contentTwo->contentAr = $term->contentAr;

            array_push($content->contactInfo->termsAndConditions, $contentTwo);
         } // end loop




         // 1.3.2: email / whatsapp
         $content->contactInfo->whatsapp = new stdClass();
         $content->contactInfo->whatsapp->whatsappNum = strval($country->contact->whatsapp);
         $content->contactInfo->whatsapp->whatsappURL = $country->contact->whatsappURL;

         $content->contactInfo->emailAddress = $country->contact->email;





         // 1.3.3: contactNumbers
         $content->contactInfo->contactNumbers = array();

         foreach ($country->contactPhones as $contactPhone) {

            array_push($content->contactInfo->contactNumbers, strval($contactPhone->phone));
         } // end loop





         // ::push into array
         array_push($contentArray, $content);
      } // end loop



      // ::prepare response
      $response->foreignCountries = $contentArray;






      // -----------------------------------------------------------------
      // -----------------------------------------------------------------
      // -----------------------------------------------------------------







      // 2: isSDNOrderingBlocked
      $country = Country::find(1);

      $response->isSDNOrderingBlocked = !boolval($country->isOrderingActive);





      // -----------------------------------------------------------------
      // -----------------------------------------------------------------
      // -----------------------------------------------------------------





      // 3.1: states / regions (areas)
      $states = State::all();


      $contentArray = array();

      foreach ($states as $state) {

         $content = new stdClass();
         $content->id = strval($state->id);
         $content->name = $state->name;
         $content->nameAr = $state->nameAr;
         $content->regions = array();



         // 3.2: insert regions (deliveryAreas)
         $counterOne = 0;
         foreach ($state->regions as $area) {

            $content->regions[$counterOne] = new stdClass();

            $content->regions[$counterOne]->id = strval($area->id);
            $content->regions[$counterOne]->name = $area->name;
            $content->regions[$counterOne]->nameAr = $area->nameAr;
            $content->regions[$counterOne]->isDeliveryBlocked = !boolval($area->isActive);


            // ::inc counterOne
            $counterOne++;
         } // end inner loop



         // 3.3: push mainCategory into categories array
         array_push($contentArray, $content);
      } // end loop





      // ::prepare response
      $response->states = $contentArray;

      return $response;
   } // end function













   // -----------------------------------------------------------------


   public function sixthAction($response)
   {

      // 1: get data

      // 1.1: companies / units
      $companies = Company::all();
      $units = Unit::all();


      $contentArray = array();
      foreach ($companies as $company) {

         $content = new stdClass();
         $content->id = strval($company->id);
         $content->name = $company->name;
         $content->nameAr = $company->nameAr;

         array_push($contentArray, $content);
      } // end loop

      // ::prepare response
      $response->companies = $contentArray;





      // -----------------------------------------------------------------
      // -----------------------------------------------------------------
      // -----------------------------------------------------------------




      $contentArray = array();
      foreach ($units as $unit) {

         $content = new stdClass();
         $content->id = strval($unit->id);
         $content->shortName = $unit->abbreviation;
         $content->shortNameAr = $unit->abbreviationAr;

         $content->longName = $unit->name;
         $content->longNameAr = $unit->nameAr;

         array_push($contentArray, $content);
      } // end loop

      // ::prepare response
      $response->measuringUnits = $contentArray;




      return $response;
   } // end function











   // -----------------------------------------------------------------






   public function seventhAction($response)
   {



      // 1: create errors - array
      $errorsList = [



         // ---- REGISTER -----

         // invalid firstname - 1
         [
            "id" => "1",
            "titleAr" => "إدخال غير صحيح",
            "titleEn" => "Invalid field",
            "msgAr" => "الاسم الأول غير صالح",
            "msgEn" => "First name is invalid"
         ],


         // invalid lastname  - 2
         [
            "id" => "2",
            "titleAr" => "إدخال غير صحيح",
            "titleEn" => "Invalid field",
            "msgAr" => "إسم العائلة غير صالح",
            "msgEn" => "Last name is invalid"
         ],


         // invalid phone - 3
         [
            "id" => "3",
            "titleAr" => "إدخال غير صحيح",
            "titleEn" => "Invalid field",
            "msgAr" => "رقم الهاتف غير صالح",
            "msgEn" => "Phone number is invalid"
         ],


         // user with same number even if deactivated - 4
         [
            "id" => "4",
            "titleAr" => "رقم هاتف غير صالح",
            "titleEn" => "Invalid phone number",
            "msgAr" => "يوجد مستخدم بنفس هذا الرقم، يرجى استخدام رقم آخر",
            "msgEn" => "There is a user with this phone number, please use different number"
         ],


         // Invalid Email - 5
         [
            "id" => "5",
            "titleAr" => "إدخال غير صحيح",
            "titleEn" => "Invalid field",
            "msgAr" => "البريد الإلكتروني غير صالح",
            "msgEn" => " Email Address is invalid"
         ],


         // Invalid Address Description - 9
         [
            "id" => "9",
            "titleAr" => "إدخال غير صحيح",
            "titleEn" => "Invalid field",
            "msgAr" => "العنوان المدخل غير صالح",
            "msgEn" => "Your address is invalid"
         ],






         // ---- LOGIN ------


         // login Password or Phone incorrect - 10
         [
            "id" => "10",
            "titleAr" => "رقم الهاتف أو/و كلمة المرور المدخله غير صحيحة",
            "titleEn" => "The phone number or/and password you entered is incorrect",
            "msgAr" => "",
            "msgEn" => ""
         ],


         // login User account deactivated - 15
         [
            "id" => "15",
            "titleAr" => "دخول غير مصرح به",
            "titleEn" => "Unauthorized access",
            "msgAr" => "تم تعطيل حساب هذا المستخدم، لمزيد من المعلومات يرجى التواصل مع خدمة العملاء",
            "msgEn" => "This user account deactivated, for more information please contact the customer services"
         ],








         // ---- Otp ------

         // otp not working currently - 11
         [
            "id" => "11",
            "titleAr" => "خطأ داخلي",
            "titleEn" => " Internal error",
            "msgAr" => "أعد المحاولة لاحقا..",
            "msgEn" => "Try again later.."
         ],


         // otp expired (phone number is not on the waiting to verify list) - 12
         [
            "id" => "12",
            "titleAr" => "انتهت صلاحية رمز التحقق",
            "titleEn" => "Verification code expired",
            "msgAr" => "ارجع للخلف للحصول على رمز تحقق جديد",
            "msgEn" => "Go back to get a new verification code"
         ],



         // otp incorrect - 13
         [
            "id" => "13",
            "titleAr" => "الرمز المدخل غير صحيح",
            "titleEn" => " The code entered is incorrect",
            "msgAr" => "",
            "msgEn" => ""
         ],



         // Phone Number is in the waiting (verify) list - 14
         [
            "id" => "14",
            "titleAr" => "لم تنته صلاحية رمز التحقق السابق",
            "titleEn" => "Previous verification code has not expired",
            "msgAr" => "أعد المحاولة لاحقا..",
            "msgEn" => "Try again later.."
         ],


         // Phone Number is in the waiting (change Number) list - 16
         [
            "id" => "16",
            "titleAr" => "رقم الهاتف غير صالح",
            "titleEn" => "Invalid Phone Number",
            "msgAr" => "أعد المحاولة لاحقا..",
            "msgEn" => "Try again later.."
         ],





         // general error (password + )

         // other errors - 17
         [
            "id" => "17",
            "titleAr" => "حدث خطأ ما..",
            "titleEn" => "Something went wrong..",
            "msgAr" => "أعد المحاولة لاحقا..",
            "msgEn" => "Try again later.."
         ],








         // ---- CHANGE USER INFO ------


         // ---- Reset Password

         // No Account with this number - 18
         [
            "id" => "18",
            "titleAr" => "رقم هاتف غير صحيح",
            "titleEn" => "Incorrect phone number",
            "msgAr" => "لا يوجد حساب بهذا الرقم",
            "msgEn" => "There is no account with this number"
         ],


         // Account Deactivated - 19
         [
            "id" => "19",
            "titleAr" => "رقم هاتف غير صالح",
            "titleEn" => "Invalid phone number",
            "msgAr" => "تم تعطيل حساب هذا المستخدم، لمزيد من المعلومات برجى التواصل مع خدمة العملاء",
            "msgEn" => "This user account deactivated, for more information please contact the customer services"
         ],


         // Waiting to reset password expired - 20
         [
            "id" => "20",
            "titleAr" => "انتهت صلاحية إعادة تعيين كلمة المرور",
            "titleEn" => "Reset password expired",
            "msgAr" => "ارجع لصفحة الدخول للحصول على رمز تحقق جديد",
            "msgEn" => "Go back to login page to get a new verification code"
         ],


         // User Password incorrect (mismatched) - 21
         [
            "id" => "21",
            "titleAr" => "كلمة مرور غير صحيحة",
            "titleEn" => "Incorrect password",
            "msgAr" => "",
            "msgEn" => ""
         ],



         // Invalid Receiver Id (mismatched) - 22
         [
            "id" => "22",
            "titleAr" => "هذا المستلم غير موجود",
            "titleEn" => "The receiver does not exists",
            "msgAr" => "",
            "msgEn" => ""
         ],


      ];


      // ::prepare response
      $response->errorsList = $errorsList;

      return $response;
   } // end function










   // -----------------------------------------------------------------
   // -----------------------------------------------------------------
   // -----------------------------------------------------------------
   // -----------------------------------------------------------------
   // -----------------------------------------------------------------








   public function subCategoryProducts(Request $request)
   {

      // 1: get data

      // 1.1: home Products (with offers)
      $products = Product::where('subCategoryId', $request->subCategoryId)
         ->where('isMainPage', false)
         ->where('isHidden', false)
         ->whereNull('offerPrice')
         ->orderBy('index')
         ->get();



      // 1.1: optional with offers
      if (boolval($request->withOffers) === true) {

         $products = Product::where('subCategoryId', $request->subCategoryId)
            ->where('isMainPage', false)
            ->where('isHidden', false)
            ->orderBy('index')
            ->get();
      } // end if


      $contentArray = array();
      foreach ($products as $product) {

         $content = new stdClass();
         $content->id = strval($product->id);
         $content->categoryId = strval($product->categoryId);
         $content->subCategoryId = strval($product->subCategoryId);
         $content->typeId = strval($product->typeId);
         $content->companyId = strval($product->companyId);


         $content->name = $product->name;
         $content->nameAr = $product->nameAr;

         $content->mainPic = url('storage/products') . '/' . $product->imageFile;
         $content->additionalPics = null;




         // ::determine productType (byName - fixedSize - dynamicSize)
         $content->productType = $product->weightOption;


         $content->measuringUnitId = strval($product->unitId);
         $content->minQuantityToOrder = $product->weightOption == 'Dynamic' ? strval(number_format($product->weight, 2, '.', '')) : '1.00';

         // :: determine packSize
         $content->packSize = $product->weightOption == 'Namefull' ? null : strval($product->weight);


         $content->quantityAvailable = strval(number_format($product->quantity, 2, '.', ''));
         $content->maxQuantityToOrder = strval(number_format($product->maxQuantityPerOrder, 2, '.', ''));
         $content->originalPrice = strval($product->sellPrice);
         $content->offerPrice = strval($product->offerPrice);

         $content->desc = $product->information;
         $content->descAr = $product->informationAr;


         array_push($contentArray, $content);
      } // end loop


      // ::prepare response
      $response = new stdClass();
      $response->subCategoryProducts = $contentArray;


      return response()->json($response, 200);
   } // end function








   // -----------------------------------------------------------------










   public function offerProducts(Request $request)
   {

      // 1: get data

      // TODO: indexOffers
      // 1.1: offer products
      $products = Product::where('offerPrice', '>=', 0)
         ->where('isHidden', false)
         ->orderBy('index')
         ->get();




      $contentArray = array();
      foreach ($products as $product) {

         $content = new stdClass();
         $content->id = strval($product->id);
         $content->categoryId = strval($product->categoryId);
         $content->subCategoryId = strval($product->subCategoryId);
         $content->typeId = strval($product->typeId);
         $content->companyId = strval($product->companyId);


         $content->name = $product->name;
         $content->nameAr = $product->nameAr;

         $content->mainPic = url('storage/products') . '/' . $product->imageFile;
         $content->additionalPics = null;




         // ::determine productType (byName - fixedSize - dynamicSize)
         $content->productType = $product->weightOption;


         $content->measuringUnitId = strval($product->unitId);
         $content->minQuantityToOrder = $product->weightOption == 'Dynamic' ? strval(number_format($product->weight, 2, '.', '')) : '1.00';

         // :: determine packSize
         $content->packSize = $product->weightOption == 'Namefull' ? null : strval($product->weight);



         $content->quantityAvailable = strval(number_format($product->quantity, 2, '.', ''));
         $content->maxQuantityToOrder = strval(number_format($product->maxQuantityPerOrder, 2, '.', ''));
         $content->originalPrice = strval($product->sellPrice);
         $content->offerPrice = strval($product->offerPrice);

         $content->desc = $product->information;
         $content->descAr = $product->informationAr;


         array_push($contentArray, $content);
      } // end loop


      // ::prepare response
      $response = new stdClass();
      $response->offersAndDiscountsProducts = $contentArray;


      return response()->json($response, 200);
   } // end function



} // end controller
