<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\InfoController;
use App\Http\Controllers\Api\InterOrderController;
use App\Http\Controllers\Api\InterUserController;
use App\Http\Controllers\Api\LaunchController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderPaymentController;
use App\Http\Controllers\Api\PreviousInterOrderController;
use App\Http\Controllers\Api\PreviousOrderController;
use App\Http\Controllers\Api\ProductController as ProductControllerApp;
use App\Http\Controllers\Api\UserController as UserControllerApp;
use App\Http\Controllers\Api\UserEditController;
use App\Http\Controllers\Api\InterUserEditController;

use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Delete phone number
Route::post("/app/deletePhone", function(Request $request){

    User::where('phone', $request->phone)->delete();

    return response()->json("phone number deleted!");
});


// 1: Launch
Route::post("/app/launch", [LaunchController::class, 'launch']);


// 1.2: Launch - subcategory products
Route::post("/app/launch/subCategoryProducts", [LaunchController::class, 'subCategoryProducts']);

// 1.3: Launch - offer products
Route::post("/app/launch/offerProducts", [LaunchController::class, 'offerProducts']);




// ========================================================
// ========================================================




// 2: Launch - help
Route::post("/app/launch/helpInfo", [InfoController::class, 'helpInfo']);


// 2.2: Launch - pdp
Route::post("/app/launch/pdp", [InfoController::class, 'pickupDeliveryInfo']);






// ========================================================
// ========================================================




// 3: Search Products
Route::post("/app/launch/searchProducts", [ProductControllerApp::class, 'searchProducts']);





// ========================================================
// ========================================================









// ========================================================
// ========================================================


// 4: login
Route::post("/app/user/login", [UserControllerApp::class, 'login']);



// 4.1: register
Route::post("/app/user/register", [UserControllerApp::class, 'register']);
Route::post("/app/user/register/confirm", [UserControllerApp::class, 'confirmRegister']);
Route::post("/app/user/register/resend", [UserControllerApp::class, 'registerResend']);




// 4.2: reset-password
Route::post("/app/user/resetPassword/getOTP", [UserEditController::class, 'resetPasswordOTP']);
Route::post("/app/user/resetPassword/resendOTP", [UserEditController::class, 'resendResetPasswordOTP']);
Route::post("/app/user/resetPassword/confirmOTP", [UserEditController::class, 'confirmResetPasswordOTP']);
Route::post("/app/user/resetPassword", [UserEditController::class, 'resetPassword']);






// :: user middleware => API needs sanctum
Route::middleware(['auth:sanctum', 'auth.user'])->group(function () {


    // 3.5: Auth - Search Products (auth)
    Route::post("/app/launch/searchProductsAuth", [ProductControllerApp::class, 'searchProductsAuth']);



    // 4.1: reset-phone (auth)
    Route::post("/app/user/changeNumber/getOTP", [UserEditController::class, 'changeNumberOTP']);
    Route::post("/app/user/changeNumber/resendOTP", [UserEditController::class, 'resendChangeNumberOTP']);
    Route::post("/app/user/changeNumber/confirmOTP", [UserEditController::class, 'confirmChangeNumberOTP']);



    // 4.2: Change Email / Password / Address (auth)
    Route::post("/app/user/changeEmail", [UserEditController::class, 'changeEmail']);
    Route::post("/app/user/changePassword", [UserEditController::class, 'changePassword']);
    Route::post("/app/user/changeAddress", [UserEditController::class, 'changeAddress']);




    // 4.3: logout (auth)
    Route::post("/app/user/logout", [UserControllerApp::class, 'logout']);




}); // end sanctum middleware - User







// ========================================================
// ========================================================





// 5: login
Route::post("/app/user/loginInter", [InterUserController::class, 'login']);



// 5.1: register
Route::post("/app/user/registerInter", [InterUserController::class, 'register']);
Route::post("/app/user/registerInter/confirm", [InterUserController::class, 'confirmRegister']);
Route::post("/app/user/registerInter/resend", [InterUserController::class, 'registerResend']);




// 5.2: reset-password
Route::post("/app/user/resetInterPassword/getOTP", [InterUserEditController::class, 'resetPasswordOTP']);
Route::post("/app/user/resetInterPassword/resendOTP", [InterUserEditController::class, 'resendResetPasswordOTP']);
Route::post("/app/user/resetInterPassword/confirmOTP", [InterUserEditController::class, 'confirmResetPasswordOTP']);
Route::post("/app/user/resetInterPassword", [InterUserEditController::class, 'resetPassword']);









// :: user middleware => API needs sanctum
Route::middleware(['auth:sanctum', 'auth.user'])->group(function () {


    // 5.1: reset-phone (auth)
    Route::post("/app/user/changeInterNumber/getOTP", [InterUserEditController::class, 'changeNumberOTP']);
    Route::post("/app/user/changeInterNumber/resendOTP", [InterUserEditController::class, 'resendChangeNumberOTP']);
    Route::post("/app/user/changeInterNumber/confirmOTP", [InterUserEditController::class, 'confirmChangeNumberOTP']);



    // 5.2: Change Email / Password / Address (auth)
    Route::post("/app/user/changeInterEmail", [InterUserEditController::class, 'changeEmail']);
    Route::post("/app/user/changeInterPassword", [InterUserEditController::class, 'changePassword']);
    Route::post("/app/user/changeInterAddress", [InterUserEditController::class, 'changeAddress']);







    // ========================================================
    // ========================================================







    // 6: Add / update / remove receiver (auth)
    Route::post("/app/user/addReceiver", [InterUserEditController::class, 'storeReceiver']);
    Route::post("/app/user/updateReceiver", [InterUserEditController::class, 'updateReceiver']);
    Route::post("/app/user/removeReceiver", [InterUserEditController::class, 'removeReceiver']);













    // ========================================================
    // ========================================================





    // 7: makeOrder / makeInterOrder / Previous Orders (auth)
    Route::post("/app/order/makeOrder", [OrderController::class, 'makeOrder']);

    Route::post("/app/order/makeInterOrder", [InterOrderController::class, 'makeInterOrder']);
    Route::post("/app/order/confirmInterOrder", [PreviousInterOrderController::class, 'confirmInterOrder']);


    Route::post("/app/order/previousOrders", [PreviousOrderController::class, 'previousOrders']);
    Route::post("/app/order/previousInterOrders", [PreviousInterOrderController::class, 'previousInterOrders']);





}); // end sanctum middleware - User
