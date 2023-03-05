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

//Trang chủ kế toán tổng
Route::get('/dashboard-ad', [TotalController::class,'index_ad'])->name('dashboard-ad');

//Trang chủ admin
Route::get('/dashboard-ac', [TotalController::class,'index_ac'])->name('dashboard-ac');

//Trang chủ salese
Route::get('/dashboard-sa', [TotalController::class,'index_sa'])->name('dashboard-sa');

//Chi tiết đơn hàng
Route::get('/bill-details', [BillController::class,'show'])->name('billDetails');


//Danh sách giá
Route::get('/price', [PriceDailyController::class,'index'])->name('priceDaily');
//Thêm mới giá
Route::post('/price/add', [PriceDailyController::class,'store'])->name('addPriceDaily');
