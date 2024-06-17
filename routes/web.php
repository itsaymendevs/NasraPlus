<?php

use App\Livewire\Dashboard\Areas;
use App\Livewire\Dashboard\Areas\AreasCreate;
use App\Livewire\Dashboard\Areas\AreasEdit;
use App\Livewire\Dashboard\Employees;
use App\Livewire\Dashboard\Help;
use App\Livewire\Dashboard\Help\Group\Advertisements;
use App\Livewire\Dashboard\Help\Group\Contact;
use App\Livewire\Dashboard\Help\Group\Messages;
use App\Livewire\Dashboard\Help\Group\MessagesGlobal;
use App\Livewire\Dashboard\Products;
use App\Livewire\Dashboard\Products\Group\Categories;
use App\Livewire\Dashboard\Products\Group\Companies;
use App\Livewire\Dashboard\Products\Group\SubCategories;
use App\Livewire\Dashboard\Products\Group\Types;
use App\Livewire\Dashboard\Products\Group\Units;
use App\Livewire\Dashboard\Products\ProductsCreate;
use App\Livewire\Dashboard\Products\ProductsEdit;
use App\Livewire\Dashboard\Stores;
use App\Livewire\Dashboard\Stores\Components\StoresCreate;
use App\Livewire\Dashboard\Stores\Components\StoresEdit;
use App\Livewire\Dashboard\Users;
use App\Livewire\Dashboard\Users\UsersOrder;
use App\Livewire\Dashboard\Users\UsersProfile;
use App\Livewire\Dashboard\Users\UsersReceiver;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;





// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- GENERAL ---------------------------------






// :: linkStorage
Route::get('/storage-link', function () {

    $return = Artisan::call('storage:link');

});






// :: LivewireServerDeployment in subRoute
if (env('APP_ENV') == 'production') {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post(env('LIVEWIRE_UPDATE_PATH'), $handle);
    });


    Livewire::setScriptRoute(function ($handle) {
        return Route::get(env('LIVEWIRE_JAVASCRIPT_PATH'), $handle);
    });

} // end if
















// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// ** ----------------------------- ADMIN -----------------------------------







// 1: login
Route::get('/', Login::class)->name('dashboard.login');
Route::get('login', Login::class)->name('dashboard.login');










// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 1: Products Tab




// 1.2: products - create - edit
Route::get('dashboard/products', Products::class)->name('dashboard.products');

Route::get('dashboard/products/create', ProductsCreate::class)->name('dashboard.createProduct');
Route::get('dashboard/products/{id}/edit', ProductsEdit::class)->name('dashboard.editProduct');







// -------------------------------







// 1.3: categories - create - edit
Route::get('dashboard/categories', Categories::class)->name('dashboard.categories');







// -------------------------------






// 1.4: subCategories - create - edit
Route::get('dashboard/sub-categories', SubCategories::class)->name('dashboard.subCategories');







// -------------------------------






// 1.5: types - create - edit
Route::get('dashboard/types', Types::class)->name('dashboard.types');








// -------------------------------






// 1.6: companies - create - edit
Route::get('dashboard/companies', Companies::class)->name('dashboard.companies');








// -------------------------------






// 1.7: units - create - edit
Route::get('dashboard/units', Units::class)->name('dashboard.units');











// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 2: Delivery Tab




// 2.1: areas - create - edit
Route::get('dashboard/areas', Areas::class)->name('dashboard.areas');

Route::get('dashboard/areas/create', AreasCreate::class)->name('dashboard.createArea');
Route::get('dashboard/areas/{id}/edit', AreasEdit::class)->name('dashboard.editArea');








// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 3: Collection Tab




// 2.1: stores - create - edit
Route::get('dashboard/stores', Stores::class)->name('dashboard.stores');

Route::get('dashboard/stores/create', StoresCreate::class)->name('dashboard.createStore');
Route::get('dashboard/stores/{id}/edit', StoresEdit::class)->name('dashboard.editStore');











// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 5: Customers Tab




// 5.1: customers
Route::get('dashboard/customers', Users::class)->name('dashboard.users');

Route::get('dashboard/customers/{id}', UsersProfile::class)->name('dashboard.userProfile');
Route::get('dashboard/customers/{id}/order', UsersOrder::class)->name('dashboard.userOrder');
Route::get('dashboard/customers/{id}/receivers/{receiverId}', UsersReceiver::class)->name('dashboard.userReceiver');




















// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 6: Help Tab




// 6.1: help
Route::get('dashboard/help', Help::class)->name('dashboard.help');








// -------------------------------






// 6.2: contact
Route::get('dashboard/contact/{id}', Contact::class)->name('dashboard.contact');









// -------------------------------






// 6.3: messages - globalMessages
Route::get('dashboard/messages', Messages::class)->name('dashboard.messages');

Route::get('dashboard/global-messages', MessagesGlobal::class)->name('dashboard.globalMessages');










// -------------------------------






// 6.4: advertisements
Route::get('dashboard/advertisements', Advertisements::class)->name('dashboard.advertisements');













// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 7: Employees Tab




// 7.1: employees - create - edit
Route::get('dashboard/employees', Employees::class)->name('dashboard.employees');




