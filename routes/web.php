<?php

use App\Livewire\Dashboard\Products\Group\Categories\CategoriesSort;
use App\Livewire\Dashboard\Products\Group\SubCategories\SubCategoriesSort;
use App\Livewire\Dashboard\Products\Group\Types\TypesSort;
use App\Livewire\Dashboard\Products\ProductsManage;
use App\Livewire\Dashboard\Products\ProductsSort;
use App\Livewire\Dashboard\Regions;
use App\Livewire\Dashboard\Regions\RegionsCreate;
use App\Livewire\Dashboard\Regions\RegionsEdit;
use App\Livewire\Dashboard\Regions\Group\RegionsConditions;
use App\Livewire\Dashboard\Regions\Group\RegionsTimes;
use App\Livewire\Dashboard\Employees;
use App\Livewire\Dashboard\Help;
use App\Livewire\Dashboard\Help\Group\Advertisements;
use App\Livewire\Dashboard\Help\Group\Contact;
use App\Livewire\Dashboard\Help\Group\Messages;
use App\Livewire\Dashboard\Help\Group\MessagesGlobal;
use App\Livewire\Dashboard\Orders;
use App\Livewire\Dashboard\Orders\OrdersView;
use App\Livewire\Dashboard\Payments;
use App\Livewire\Dashboard\Payments\Group\PaymentsConditions;
use App\Livewire\Dashboard\PreviousOrders;
use App\Livewire\Dashboard\Products;
use App\Livewire\Dashboard\Products\Group\Categories;
use App\Livewire\Dashboard\Products\Group\Companies;
use App\Livewire\Dashboard\Products\Group\SubCategories;
use App\Livewire\Dashboard\Products\Group\Types;
use App\Livewire\Dashboard\Products\Group\Units;
use App\Livewire\Dashboard\Products\ProductsCreate;
use App\Livewire\Dashboard\Products\ProductsEdit;
use App\Livewire\Dashboard\Stores;
use App\Livewire\Dashboard\Stores\Group\StoresConditions;
use App\Livewire\Dashboard\Stores\StoresCreate;
use App\Livewire\Dashboard\Stores\StoresEdit;
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





// :: middleware - employee
Route::middleware(['auth.employee'])->group(function () {




    // 1: Products Tab




    // 1.2: products - manage - sort - create - edit
    Route::get('dashboard/products', Products::class)->name('dashboard.products');
    Route::get('dashboard/products/manage', ProductsManage::class)->name('dashboard.manageProducts');
    Route::get('dashboard/products/sort/{id}', ProductsSort::class)->name('dashboard.sortProducts');

    Route::get('dashboard/products/create', ProductsCreate::class)->name('dashboard.createProduct');
    Route::get('dashboard/products/{id}/edit', ProductsEdit::class)->name('dashboard.editProduct');












    // -------------------------------







    // 1.3: categories - create - edit
    Route::get('dashboard/categories', Categories::class)->name('dashboard.categories');
    Route::get('dashboard/categories/sort', CategoriesSort::class)->name('dashboard.sortCategories');







    // -------------------------------






    // 1.4: subCategories - create - edit - sort
    Route::get('dashboard/sub-categories', SubCategories::class)->name('dashboard.subCategories');
    Route::get('dashboard/sub-categories/{id}/sort', SubCategoriesSort::class)->name('dashboard.sortSubCategories');







    // -------------------------------






    // 1.5: types - create - edit - sort
    Route::get('dashboard/types', Types::class)->name('dashboard.types');
    Route::get('dashboard/types/{id}/sort', TypesSort::class)->name('dashboard.sortTypes');








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




    // 2.1: regions - create - edit
    Route::get('dashboard/regions', Regions::class)->name('dashboard.regions');

    Route::get('dashboard/regions/create', RegionsCreate::class)->name('dashboard.createRegion');
    Route::get('dashboard/regions/{id}/edit', RegionsEdit::class)->name('dashboard.editRegion');





    // -------------------------------







    // 2.2: regions - conditions - create - edit
    Route::get('dashboard/regions/conditions', RegionsConditions::class)->name('dashboard.regions.conditions');







    // -------------------------------






    // 2.3: regions - times - create - edit
    Route::get('dashboard/regions/times', RegionsTimes::class)->name('dashboard.regions.times');













    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------







    // 3: Pickup Tab




    // 3.1: stores - create - edit
    Route::get('dashboard/stores', Stores::class)->name('dashboard.stores');

    Route::get('dashboard/stores/create', StoresCreate::class)->name('dashboard.createStore');
    Route::get('dashboard/stores/{id}/edit', StoresEdit::class)->name('dashboard.editStore');









    // 3.2: stores - conditions - create - edit
    Route::get('dashboard/stores/conditions', StoresConditions::class)->name('dashboard.stores.conditions');

















    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------







    // 4: Payments Tab




    // 4.1: payments - create - edit
    Route::get('dashboard/payments', Payments::class)->name('dashboard.payments');




    // 4.2: payments - conditions - create - edit
    Route::get('dashboard/payments/conditions', PaymentsConditions::class)->name('dashboard.payments.conditions');














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






















    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------
    // ----------------------------------------------------------------------------







    // 8: Orders - PreviousOrders




    // 7.1: orders - create - edit
    Route::get('dashboard/orders', Orders::class)->name('dashboard.orders');
    Route::get('dashboard/previous-orders', PreviousOrders::class)->name('dashboard.previousOrders');


    Route::get('dashboard/orders/{id}', OrdersView::class)->name('dashboard.singleOrder');





}); // end middleware
