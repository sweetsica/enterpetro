<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\PriceDailyController;
use App\Http\Controllers\BillController;

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

//Đăng nhập
Route::get('/', [TotalController::class,'index'])->name('login');
Route::post('/loginCheck', [TotalController::class,'checklogin'])->name('loginCheck');
Route::get('/logout', [TotalController::class,'logout'])->name('logout');

//Trang chủ kế toán tổng
Route::get('/dashboard-ad', [TotalController::class,'index_ad'])->name('
');

//Trang chủ admin
Route::get('/dashboard-ac', [TotalController::class,'index_ac'])->name('dashboard-ac');

//Trang chủ salese
Route::get('/dashboard-sa', [TotalController::class,'index_sa'])->name('dashboard-sa');

//Danh sachs đơn
Route::get('/bill', [BillController::class,'index'])->name('listBill');
//Lên đơn
Route::post('/bill/add', [BillController::class,'store'])->name('addBill');
//Chi tiết đơn hàng
Route::get('/bill-details', [BillController::class,'show'])->name('billDetails');



//Danh sách giá
Route::get('/price', [PriceDailyController::class,'index'])->name('priceDaily');
//Thêm mới giá
Route::post('/price/add', [PriceDailyController::class,'store'])->name('addPriceDaily');


Route::get('/editor', function (){
   return view('manage.billDetail');
});

Route::get('/demo/editor',[BillController::class,'show']);


