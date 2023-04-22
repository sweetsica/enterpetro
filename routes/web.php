<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\PriceDailyController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StorageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/dashboard',function (){
    return view('dashboard-economy');
})->name('dashboard-economy');

//Đăng nhập
Route::get('/', [TotalController::class,'index'])->name('login');
Route::post('/loginCheck', [TotalController::class,'checklogin'])->name('loginCheck');
Route::get('/logout', [TotalController::class,'logout'])->name('logout');

//Trang chủ admin
Route::get('/trang-chu-admin', [TotalController::class,'index_ad'])->name('dashboard-ad');
//Trang chủ kế toán tổng
Route::get('/dashboard-ke-toan', [TotalController::class,'index_ac'])->name('dashboard-ac');
//Trang chủ sales
Route::get('/dashboard-sales', [TotalController::class,'index_sa'])->name('dashboard-sa');
//Trang chủ khách hàng
Route::get('/dashboard-khach-hang', [CustomerController::class, 'index'])->name('index-cus');

//Trang chủ khách hàng
Route::get('/detail-khach-hang/{customerId}', [CustomerController::class, 'show'])->name('detail-cus');

Route::post('/khach-hang', [CustomerController::class, 'store'])->name('store-cus');

//Danh sách đơn
Route::get('/bill', [BillController::class,'index'])->name('listBill');
//Lên đơn
Route::post('/bill/add', [BillController::class,'store'])->name('addBill');
//Chi tiết đơn hàng
Route::get('/bill-details', [BillController::class,'show'])->name('billDetails');

//Danh sách giá
Route::get('/price', [PriceDailyController::class,'index'])->name('priceDaily');
//Thêm mới giá
Route::post('/price/add', [PriceDailyController::class,'store'])->name('addPriceDaily');

//Danh sách khách
Route::get('/khach-hang', [CustomerController::class,'index'])->name('customer.index');

//Thông tin kho
Route::get('/kho',[StorageController::class,'index'])->name('storage.index');
Route::get('/kho/{id}',[StorageController::class,'show'])->name('storage.show');
Route::post('/kho/update', [StorageController::class, 'update'])->name('updateBill');

//Update đơn
Route::post('/bill/update', [BillController::class, 'update'])->name('updateBill');

//Test
Route::get('/editor', function (){
   return view('manage.billDetail');
});

Route::get('/demo/editor',[BillController::class,'show']);


