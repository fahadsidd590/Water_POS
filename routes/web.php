<?php

use App\Http\Controllers\addbrands;
use App\Http\Controllers\AddCategory;
use App\Http\Controllers\addproducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subaddcategory;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\supplierController;
use App\Models\subcategory;
use App\Models\supplier;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', [CustomAuthController::class, 'dashboard']);
Route::get('signin', [CustomAuthController::class, 'index'])->name('signin');
Route::post('custom-login', [CustomAuthController::class, 'customSignin'])->name('signin.custom');
Route::get('signup', [CustomAuthController::class, 'registration'])->name('signup');
Route::post('custom-register', [CustomAuthController::class, 'customSignup'])->name('signup.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('addcategory', [AddCategory::class, 'store'])->name('add-category');
Route::get('categorylist', [AddCategory::class, 'index']);
Route::get('editcategory/{id}', [AddCategory::class, 'edit'])->name('editcategory1');
Route::post('editcategory/{id}', [AddCategory::class, 'update'])->name('editcategory2');
Route::get('subaddcategory', [Subaddcategory::class, 'index'])->name('subaddcategory');
Route::post('subaddcategory', [Subaddcategory::class, 'store'])->name('addsubcategory');
Route::get('subcategorylist', [Subaddcategory::class, 'show'])->name('subcategorylist');
Route::get('editsubcategory/{id}', [Subaddcategory::class, 'edit'])->name('editsubcategory');
Route::post('editsubcategory/{id}', [Subaddcategory::class, 'update'])->name('editsubcategory2');
Route::get('addbrand', [addbrands::class, 'index']);
Route::post('addbrand', [addbrands::class, 'store'])->name('addbrand1');
Route::get('brandlist', [addbrands::class, 'index']);
Route::get('editbrand/{id}', [addbrands::class, 'edit'])->name('editbrand');
Route::post('editbrand/{id}', [addbrands::class, 'update'])->name('editbrand2');
Route::get('/addbrand', function () {
    return view('addbrand');
})->name('addbrand');
Route::get('get_subcategory/{id}', [Subaddcategory::class, 'fetch_subcategory']);
Route::get('addproduct', [addproducts::class, 'index'])->name('addproduct');
Route::post('addproduct', [addproducts::class, 'store'])->name('add_product');
Route::get('productlist', [addproducts::class, 'show'])->name('productlist');
Route::get('edit_product/{id}', [addproducts::class, 'edit'])->name('editproduct');
Route::post('edit_product/{id}', [addproducts::class, 'update'])->name('edit_product');
Route::get('product_detail/{id}', [addproducts::class, 'edit_2'])->name('productdetail');
Route::get('product/{id}', [addproducts::class, 'destroy']);
Route::get('product_export', [addproducts::class, 'export'])->name('product.export');
Route::get('product_export_pdf', [addproducts::class, 'create_pdf']);
Route::post('/addcustomer', [CustomerController::class, 'store'])->name('add-customer');

Route::get('/addcustomer', function () {
    return view('addcustomer');
})->name('addcustomer');
Route::get('customerlist', [CustomerController::class, 'index'])->name('customerlist');
Route::get('editcustomer/{id}',[CustomerController::class ,'edit'])->name('editcustomer');
Route::post('editcustomer/{id}', [CustomerController::class, 'update'])->name('editcustomer2');


Route::get('/addsupplier', function () {
    return view('addsupplier');
})->name('addsupplier');
Route::post('/addsupplier', [supplierController::class, 'store'])->name('add-supplier');
Route::get('supplierlist', [supplierController::class, 'index'])->name('supplierlist');
Route::get('editsupplier/{id}',[supplierController::class ,'edit'])->name('editsupplier');
Route::post('editsupplier/{id}', [supplierController::class, 'update'])->name('editsupplier2');
// Route::get('/editsupplier', function () {
//     return view('editsupplier');
// })->name('editsupplier');



Route::get('/', function () {
    return view('signin');
})->name('signin');
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/add-sales', function () {
    return view('add-sales');
})->name('add-sales');

Route::get('/addpurchase', function () {
    return view('addpurchase');
})->name('addpurchase');
Route::get('/addquotation', function () {
    return view('addquotation');
})->name('addquotation');
Route::get('/addstore', function () {
    return view('addstore');
})->name('addstore');

Route::get('/addtransfer', function () {
    return view('addtransfer');
})->name('addtransfer');
Route::get('/adduser', function () {
    return view('adduser');
})->name('adduser');
Route::get('/barcode', function () {
    return view('barcode');
})->name('barcode');
Route::get('/blankpage', function () {
    return view('blankpage');
})->name('blankpage');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');
Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');
Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot');
Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');
Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris');
Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/clipboard', function () {
    return view('clipboard');
})->name('clipboard');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/counter', function () {
    return view('counter');
})->name('counter');
Route::get('/countrieslist', function () {
    return view('countrieslist');
})->name('countrieslist');
Route::get('/createexpense', function () {
    return view('createexpense');
})->name('createexpense');
Route::get('/createpermission', function () {
    return view('createpermission');
})->name('createpermission');
Route::get('/createpurchasereturn', function () {
    return view('createpurchasereturn');
})->name('createpurchasereturn');
Route::get('/createsalesreturn', function () {
    return view('createsalesreturn');
})->name('createsalesreturn');
Route::get('/createsalesreturns', function () {
    return view('createsalesreturns');
})->name('createsalesreturns');
Route::get('/currencysettings', function () {
    return view('currencysettings');
})->name('currencysettings');

Route::get('/customerreport', function () {
    return view('customerreport');
})->name('customerreport');
Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/drag-drop', function () {
    return view('drag-drop');
})->name('drag-drop');
Route::get('/edit-sales', function () {
    return view('edit-sales');
})->name('edit-sales');


Route::get('/editexpense', function () {
    return view('editexpense');
})->name('editexpense');
Route::get('/editpermission', function () {
    return view('editpermission');
})->name('editpermission');
Route::get('/editpurchase', function () {
    return view('editpurchase');
})->name('editpurchase');
Route::get('/editpurchasereturn', function () {
    return view('editpurchasereturn');
})->name('editpurchasereturn');
Route::get('/editquotation', function () {
    return view('editquotation');
})->name('editquotation');
Route::get('/editsalesreturn', function () {
    return view('editsalesreturn');
})->name('editsalesreturn');
Route::get('/editsalesreturns', function () {
    return view('editsalesreturns');
})->name('editsalesreturns');
Route::get('/editstate', function () {
    return view('editstate');
})->name('editstate');
Route::get('/editstore', function () {
    return view('editstore');
})->name('editstore');

Route::get('/edittransfer', function () {
    return view('edittransfer');
})->name('edittransfer');
Route::get('/edituser', function () {
    return view('edituser');
})->name('edituser');
Route::get('/email', function () {
    return view('email');
})->name('email');
Route::get('/emailsettings', function () {
    return view('emailsettings');
})->name('emailsettings');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/expensecategory', function () {
    return view('expensecategory');
})->name('expensecategory');
Route::get('/expenselist', function () {
    return view('expenselist');
})->name('expenselist');
Route::get('/forgetpassword', function () {
    return view('forgetpassword');
})->name('forgetpassword');
Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');
Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');
Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');
Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');
Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');
Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');
Route::get('/generalsettings', function () {
    return view('generalsettings');
})->name('generalsettings');
Route::get('/grouppermissions', function () {
    return view('grouppermissions');
})->name('grouppermissions');
Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');
Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');
Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');
Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');
Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');
Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');
Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');
Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');
Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');
Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');
Route::get('/importproduct', function () {
    return view('importproduct');
})->name('importproduct');
Route::get('/importpurchase', function () {
    return view('importpurchase');
})->name('importpurchase');
Route::get('/importtransfer', function () {
    return view('importtransfer');
})->name('importtransfer');
Route::get('/inventoryreport', function () {
    return view('inventoryreport');
})->name('inventoryreport');
Route::get('/invoicereport', function () {
    return view('invoicereport');
})->name('invoicereport');
Route::get('/lightbox', function () {
    return view('lightbox');
})->name('lightbox');
Route::get('/newcountry', function () {
    return view('newcountry');
})->name('newcountry');
Route::get('/newstate', function () {
    return view('newstate');
})->name('newstate');
Route::get('/newuser', function () {
    return view('newuser');
})->name('newuser');
Route::get('/newuseredit', function () {
    return view('newuseredit');
})->name('newuseredit');
Route::get('/notification', function () {
    return view('notification');
})->name('notification');
Route::get('/paymentsettings', function () {
    return view('paymentsettings');
})->name('paymentsettings');
Route::get('/popover', function () {
    return view('popover');
})->name('popover');
Route::get('/pos', function () {
    return view('pos');
})->name('pos');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/purchaselist', function () {
    return view('purchaselist');
})->name('purchaselist');
Route::get('/purchaseorderreport', function () {
    return view('purchaseorderreport');
})->name('purchaseorderreport');
Route::get('/purchasereport', function () {
    return view('purchasereport');
})->name('purchasereport');
Route::get('/purchasereturnlist', function () {
    return view('purchasereturnlist');
})->name('purchasereturnlist');
Route::get('/rangeslider', function () {
    return view('rangeslider');
})->name('rangeslider');
Route::get('/rating', function () {
    return view('rating');
})->name('rating');
Route::get('/resetpassword', function () {
    return view('resetpassword');
})->name('resetpassword');
Route::get('/ribbon', function () {
    return view('ribbon');
})->name('ribbon');
Route::get('/sales-details', function () {
    return view('sales-details');
})->name('sales-details');
Route::get('/saleslist', function () {
    return view('saleslist');
})->name('saleslist');
Route::get('/salesreport', function () {
    return view('salesreport');
})->name('salesreport');
Route::get('/salesreturnlist', function () {
    return view('salesreturnlist');
})->name('salesreturnlist');
Route::get('/salesreturnlists', function () {
    return view('salesreturnlists');
})->name('salesreturnlists');
Route::get('/scrollbar', function () {
    return view('scrollbar');
})->name('scrollbar');
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/spinner', function () {
    return view('spinner');
})->name('spinner');
Route::get('/statelist', function () {
    return view('statelist');
})->name('statelist');
Route::get('/stickynote', function () {
    return view('stickynote');
})->name('stickynote');
Route::get('/storelist', function () {
    return view('storelist');
})->name('storelist');
// Route::get('/subaddcategory', function () {
// return view('subaddcategory');
// })->name('subaddcategory');


Route::get('/supplierreport', function () {
    return view('supplierreport');
})->name('supplierreport');
Route::get('/sweetalerts', function () {
    return view('sweetalerts');
})->name('sweetalerts');
Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');
Route::get('/taxrates', function () {
    return view('taxrates');
})->name('taxrates');
Route::get('/text-editor', function () {
    return view('text-editor');
})->name('text-editor');
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');
Route::get('/toastr', function () {
    return view('toastr');
})->name('toastr');
Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip');
Route::get('/transferlist', function () {
    return view('transferlist');
})->name('transferlist');
Route::get('/userlist', function () {
    return view('userlist');
})->name('userlist');
Route::get('/userlists', function () {
    return view('userlists');
})->name('userlists');
Route::get('/quotationlist', function () {
    return view('quotationlist');
})->name('quotationlist');
Route::get('/editcountry', function () {
    return view('editcountry');
})->name('editcountry');


//my own routes
Route::resource('category', AddCategory::class);
