<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerImportController;
use App\Http\Controllers\ProductMasukController;
use App\Http\Controllers\ProductKeluarController;
use App\Http\Controllers\SupplierImportController;
use App\Http\Controllers\SalesImportController;
use App\Http\Controllers\ProductExportController;
use App\Http\Controllers\ReturImportController;
//LiveP
use App\Livewire\DashboardComponent;
use App\Livewire\UserAddComponent;
use App\Livewire\UserAllComponent;
use App\Livewire\Category\CategoryAllComponent;
use App\Livewire\Category\CategoryAddComponent;
use App\Livewire\Category\CategoryEditComponent;
use App\Livewire\Product\ProductAllComponent;
use App\Livewire\Product\ProductAddComponent;
use App\Livewire\Product\ProductEditComponent;
use App\Livewire\Product\ProductDetailComponent;
use App\Livewire\Customer\CustomerAddComponent;
use App\Livewire\Customer\CustomerEditComponent;
use App\Livewire\Customer\CustomerAllComponent;
use App\Livewire\ProductKeluar\PkAllComponent;
use App\Livewire\ProductKeluar\PkAddComponent;
use App\Livewire\ProductKeluar\PkEditComponent;
use App\Livewire\ProductMasuk\PmAddComponent;
use App\Livewire\ProductMasuk\PmAllComponent;
use App\Livewire\ProductMasuk\PmEditComponent;
use App\Livewire\Sales\SalesAllCompenent;
use App\Livewire\Sales\SalesEditComponent;
use App\Livewire\Sales\SalesAddComponent;
use App\Livewire\Supplier\SupplierAddComponent;
use App\Livewire\Supplier\SupplierAllComponent;
use App\Livewire\Supplier\SupplierEditComponent;
use App\Livewire\Activity\ProductActivityComponent;
use App\Livewire\Activity\ProductKeluarActivityComponent;
use App\Livewire\Activity\ProductMasukActivityComponent;
use App\Livewire\Activity\ReturActivityComponent;
use App\Livewire\Retur\ReturAllComponent;
use App\Livewire\Retur\ReturAddComponent;
use App\Livewire\Retur\ReturEditComponent;
use App\Livewire\PeminjamanBarang\PeminjamanAddComponent;
use App\Livewire\PeminjamanBarang\PeminjamanAllComponent;
use App\Livewire\PeminjamanBarang\PeminjamanEditComponent;









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

Route::get('/', function () {
    return view('welcome');
});

//Auth
Route::group(['middleware' =>  ['auth']], function(){
    Route::group(['middleware' => ['role:admin']], function(){

    });
    Route::group(['middleware' => ['role:normal_user']], function(){

    });
    Route::group(['middleware' => ['role:supervisor_admin']], function(){
        
    });
});

Route::get('all-user', UserAllComponent::class)->name('user.all');
Route::get('add-user', UserAddComponent::class)->name('user.add');
Route::get('product-activity', ProductActivityComponent::class)->name('product.activity');
Route::get('product_out-activity', ProductKeluarActivityComponent::class)->name('product_keluar.activity');
Route::get('product_in-activity', ProductMasukActivityComponent::class)->name('product_masuk.activity');
Route::get('retur-activity', ReturActivityComponent::class)->name('retur.activity');


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::post('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');  

Route::get('reg', [RegisterController::class, 'index'])->name('register');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

Route::get('dashboard', DashboardComponent::class)->name('dashboard.admin');

Route::get('index-category', CategoryAllComponent::class)->name('category.all');
Route::get('add-category', CategoryAddComponent::class)->name('category.add');
Route::get('edit-category/{category_id}', CategoryEditComponent::class)->name('category.edit');

Route::get('all-product', ProductAllComponent::class)->name('product.all');
Route::get('add-product', ProductAddComponent::class)->name('product.add');
Route::get('edit-product/{product_id}', ProductEditComponent::class)->name('product.edit');
Route::get('detail-product/{product_id}', ProductDetailComponent::class)->name('product.detail');

Route::get('all-customer', CustomerAllComponent::class)->name('customer.all');
Route::get('add-customer', CustomerAddComponent::class)->name('customer.add');
Route::get('edit-customer/{customer_id}', CustomerEditComponent::class)->name('customer.edit');

Route::get('all-sales', SalesAllCompenent::class)->name('sales.all');
Route::get('add-sales', SalesAddComponent::class)->name('sales.add');
Route::get('edit-sales/{sales_id}', SalesEditComponent::class)->name('sales.edit');

Route::get('all-suppliers', SupplierAllComponent::class)->name('suppliers.all');
Route::get('add-suppliers', SupplierAddComponent::class)->name('suppliers.add');
Route::get('edit-suppliers/{suppliers_id}', SupplierEditComponent::class)->name('suppliers.edit');

Route::get('all-product_in', PmAllComponent::class)->name('product_masuk.all');
Route::get('add-product_in', PmAddComponent::class)->name('product_masuk.add');
Route::get('edit-product_in/{pm_id}', PmEditComponent::class)->name('product_masuk.edit');

Route::get('all-product_out', PkAllComponent::class)->name('product_keluar.all');
Route::get('add-product_out', PkAddComponent::class)->name('product_keluar.add');
Route::get('edit-product_out/{pk_id}', PkEditComponent::class)->name('product_keluar.edit');

Route::get('all-retur', ReturAllComponent::class)->name('retur.all');
Route::get('add-retur', ReturAddComponent::class)->name('retur.add');
Route::get('edit-retur/{retur_id}', ReturEditComponent::class)->name('retur.edit');

Route::get('peminjaman', PeminjamanAllComponent::class)->name('peminjaman.all');
Route::get('add-peminjaman', PeminjamanAddComponent::class)->name('peminjaman.add');
Route::get('edit-peminjaman/{peminjaman_id}', PeminjamanEditComponent::class)->name('peminjaman.edit');

Route::post('import-retur', [ReturImportController::class, 'ReturImport'])->name('retur.import');
Route::get('export-retur', [ReturImportController::class, 'ReturExport'])->name('retur.export');

//import_route
Route::post('import-customer', [CustomerImportController::class, 'CustomerImport'])->name('customer.import');
Route::get('export-customer', [CustomerImportController::class, 'CustomerExport'])->name('customer.export');
Route::get('export-product_masuk', [ProductMasukController::class , 'ProductMasukExport'])->name('product_masuk.export');
Route::get('export-product_keluar', [ProductKeluarController::class, 'ProductKeluarExport'])->name('product_keluar.export');
Route::post('import-supplier', [SupplierImportController::class, 'SupplierImport'])->name('supplier.import');
Route::get('export-supplier', [SupplierImportController::class, 'SupplierExport'])->name('supplier.export');
Route::get('export-sales', [SalesImportController::class, 'SalesExport'])->name('sales.export');
Route::post('import-sales', [SalesImportController::class, 'SalesImport'])->name('sales.import');
Route::get('export-product', [ProductExportController::class, 'ProductExport'])->name('product.export');





