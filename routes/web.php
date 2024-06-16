<?php

use App\Livewire\Dashboard\Areas;
use App\Livewire\Dashboard\Areas\AreasCreate;
use App\Livewire\Dashboard\Areas\AreasEdit;
use App\Livewire\Dashboard\Employees;
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
Route::get('products', Products::class)->name('dashboard.products');

Route::get('products/create', ProductsCreate::class)->name('dashboard.createProduct');
Route::get('products/{id}/edit', ProductsEdit::class)->name('dashboard.editProduct');







// -------------------------------







// 1.3: categories - create - edit
Route::get('categories', Categories::class)->name('dashboard.categories');







// -------------------------------






// 1.4: subCategories - create - edit
Route::get('sub-categories', SubCategories::class)->name('dashboard.subCategories');







// -------------------------------






// 1.5: types - create - edit
Route::get('types', Types::class)->name('dashboard.types');








// -------------------------------






// 1.6: companies - create - edit
Route::get('companies', Companies::class)->name('dashboard.companies');








// -------------------------------






// 1.7: units - create - edit
Route::get('units', Units::class)->name('dashboard.units');











// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 2: Delivery Tab




// 2.1: areas - create - edit
Route::get('areas', Areas::class)->name('dashboard.areas');

Route::get('areas/create', AreasCreate::class)->name('dashboard.createArea');
Route::get('areas/{id}/edit', AreasEdit::class)->name('dashboard.editArea');








// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 3: Collection Tab




// 2.1: stores - create - edit
Route::get('stores', Stores::class)->name('dashboard.stores');

Route::get('stores/create', StoresCreate::class)->name('dashboard.createStore');
Route::get('stores/{id}/edit', StoresEdit::class)->name('dashboard.editStore');











// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 5: Customers Tab




// 5.1: customers
Route::get('customers', Users::class)->name('dashboard.users');

Route::get('customers/{id}', UsersProfile::class)->name('dashboard.userProfile');
Route::get('customers/{id}/order', UsersOrder::class)->name('dashboard.userOrder');
Route::get('customers/{id}/receiver/{id}', UsersReceiver::class)->name('dashboard.userReceiver');


















// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------







// 7: Employees Tab




// 7.1: employees - create - edit
Route::get('employees', Employees::class)->name('dashboard.employees');




