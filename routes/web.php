<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TonGiaoController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChuyenMonController;
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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('frontend');

Route::prefix('nhan-vien')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('frontend.user');

//phong ban
Route::get('/phongban',[PhongBanController::class,'getdanhsach'])->name('phongban');
Route::get('/phongban/them',[PhongBanController::class,'getThem'])->name('phongban.them');
Route::post('/phongban/them',[PhongBanController::class,'postThem'])->name('phongban.them');
Route::get('/phongban/sua/{id}',[PhongBanController::class,'getSua'])->name('phongban.sua');
Route::post('/phongban/sua/{id}',[PhongBanController::class,'postSua'])->name('phongban.sua');
Route::get('/phongban/xoa/{id}',[PhongBanController::class,'getXoa'])->name('phongban.xoa');
});


Route::prefix('quan-ly')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('frontend.admin');
//ton giao
Route::get('/tongiao',[TonGiaoController::class,'getdanhsach'])->name('tongiao');
Route::get('/tongiao/them',[TonGiaoController::class,'getThem'])->name('tongiao.them');
Route::post('/tongiao/them',[TonGiaoController::class,'postThem'])->name('tongiao.them');
Route::get('/tongiao/sua/{id}',[TonGiaoController::class,'getSua'])->name('tongiao.sua');
Route::post('/tongiao/sua/{id}',[TonGiaoController::class,'postSua'])->name('tongiao.sua');
Route::get('/tongiao/xoa/{id}',[TonGiaoController::class,'postXoa'])->name('tongiao.xoa');

//ton giao
Route::get('/nhanvien',[NhanVienController::class,'getdanhsach'])->name('nhanvien');
Route::get('/nhanvien/them',[NhanVienController::class,'getThem'])->name('nhanvien.them');
Route::post('/nhanvien/them',[NhanVienController::class,'postThem'])->name('nhanvien.them');
Route::get('/nhanvien/sua/{id}',[NhanVienController::class,'getSua'])->name('nhanvien.sua');
Route::post('/nhanvien/sua/{id}',[NhanVienController::class,'postSua'])->name('nhanvien.sua');
Route::get('/nhanvien/xoa/{id}',[NhanVienController::class,'postXoa'])->name('nhanvien.xoa');

Route::get('/User',[UserController::class,'getdanhsach'])->name('User');
Route::get('/User/them',[UserController::class,'getThem'])->name('User.them');
Route::post('/User/them',[UserController::class,'postThem'])->name('User.them');
Route::get('/User/sua/{id}',[UserController::class,'getSua'])->name('User.sua');
Route::post('/User/sua/{id}',[UserController::class,'postSua'])->name('User.sua');
Route::get('/User/xoa/{id}',[UserController::class,'getXoa'])->name('User.xoa');

Route::get('/chuyenmon',[ChuyenMonController::class,'getdanhsach'])->name('chuyenmon');
Route::get('/chuyenmon/them',[ChuyenMonController::class,'getThem'])->name('chuyenmon.them');
Route::post('/chuyenmon/them',[ChuyenMonController::class,'postThem'])->name('chuyenmon.them');
Route::get('/chuyenmon/sua/{id}',[ChuyenMonController::class,'getSua'])->name('chuyenmon.sua');
Route::post('/chuyenmon/sua/{id}',[ChuyenMonController::class,'postSua'])->name('chuyenmon.sua');
Route::get('/chuyenmon/xoa/{id}',[ChuyenMonController::class,'postXoa'])->name('chuyenmon.xoa');

Route::get('/bangcap',[ChuyenMonController::class,'getdanhsach'])->name('bangcap');
Route::get('/bangcap/them',[ChuyenMonController::class,'getThem'])->name('bangcap.them');
Route::post('/bangcap/them',[ChuyenMonController::class,'postThem'])->name('bangcap.them');
Route::get('/bangcap/sua/{id}',[ChuyenMonController::class,'getSua'])->name('bangcap.sua');
Route::post('/bangcap/sua/{id}',[ChuyenMonController::class,'postSua'])->name('bangcap.sua');
Route::get('/bangcap/xoa/{id}',[ChuyenMonController::class,'postXoa'])->name('bangcap.xoa');

});