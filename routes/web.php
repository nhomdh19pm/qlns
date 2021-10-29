<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhongBanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TonGiaoController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChuyenMonController;
use App\Http\Controllers\NgoaiNguController;
use App\Http\Controllers\BangCapController;
use App\Http\Controllers\DanTocController;
use App\Http\Controllers\ThuongPhatController;
use App\Http\Controllers\HopDongController;
use App\Http\Controllers\UngLuongController;
use App\Http\Controllers\LoaiBaoHiemController;
use App\Http\Controllers\MucLuongController;
use App\Http\Controllers\LichNghiController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\NghiViecController;
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
Route::middleware('auth')->get('/', [HomeController::class, 'index'])->name('frontend');
//Route::get('/index', [HomeController::class, 'index'])->name('index');

/*Route::middleware('auth')->prefix('nhan-vien')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('frontend.user');
});*/

Route::middleware('auth')->prefix('quan-ly')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('frontend.admin');
    //ton giao
    Route::get('/tongiao',[TonGiaoController::class,'getdanhsach'])->name('tongiao');
    Route::get('/tongiao/them',[TonGiaoController::class,'getThem'])->name('tongiao.them');
    Route::post('/tongiao/them',[TonGiaoController::class,'postThem'])->name('tongiao.them');
    Route::get('/tongiao/sua/{id}',[TonGiaoController::class,'getSua'])->name('tongiao.sua');
    Route::post('/tongiao/sua/{id}',[TonGiaoController::class,'postSua'])->name('tongiao.sua');
    Route::get('/tongiao/xoa/{id}',[TonGiaoController::class,'getXoa'])->name('tongiao.xoa');

   //phong ban
   Route::get('/phongban',[PhongBanController::class,'getdanhsach'])->name('phongban');
   Route::get('/phongban/them',[PhongBanController::class,'getThem'])->name('phongban.them');
   Route::post('/phongban/them',[PhongBanController::class,'postThem'])->name('phongban.them');
   Route::get('/phongban/sua/{id}',[PhongBanController::class,'getSua'])->name('phongban.sua');
   Route::post('/phongban/sua/{id}',[PhongBanController::class,'postSua'])->name('phongban.sua');
   Route::get('/phongban/xoa/{id}',[PhongBanController::class,'getXoa'])->name('phongban.xoa');

    //ton giao
    Route::get('/nhanvien',[NhanVienController::class,'getdanhsach'])->name('nhanvien');
    Route::get('/nhanvien/them',[NhanVienController::class,'getThem'])->name('nhanvien.them');
    Route::post('/nhanvien/them',[NhanVienController::class,'postThem'])->name('nhanvien.them');
    Route::get('/nhanvien/sua/{id}',[NhanVienController::class,'getSua'])->name('nhanvien.sua');
    Route::post('/nhanvien/sua/{id}',[NhanVienController::class,'postSua'])->name('nhanvien.sua');
    Route::get('/nhanvien/xoa/{id}',[NhanVienController::class,'getXoa'])->name('nhanvien.xoa');

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
    Route::get('/chuyenmon/xoa/{id}',[ChuyenMonController::class,'getXoa'])->name('chuyenmon.xoa');

    Route::get('/bangcap',[BangCapController::class,'getdanhsach'])->name('bangcap');
    Route::get('/bangcap/them',[BangCapController::class,'getThem'])->name('bangcap.them');
    Route::post('/bangcap/them',[BangCapController::class,'postThem'])->name('bangcap.them');
    Route::get('/bangcap/sua/{id}',[BangCapController::class,'getSua'])->name('bangcap.sua');
    Route::post('/bangcap/sua/{id}',[BangCapController::class,'postSua'])->name('bangcap.sua');
    Route::get('/bangcap/xoa/{id}',[BangCapController::class,'getXoa'])->name('bangcap.xoa');

    Route::get('/ngoaingu',[NgoaiNguController::class,'getdanhsach'])->name('ngoaingu');
    Route::get('/ngoaingu/them',[NgoaiNguController::class,'getThem'])->name('ngoaingu.them');
    Route::post('/ngoaingu/them',[NgoaiNguController::class,'postThem'])->name('ngoaingu.them');
    Route::get('/ngoaingu/sua/{id}',[NgoaiNguController::class,'getSua'])->name('ngoaingu.sua');
    Route::post('/ngoaingu/sua/{id}',[NgoaiNguController::class,'postSua'])->name('ngoaingu.sua');
    Route::get('/ngoaingu/xoa/{id}',[NgoaiNguController::class,'getXoa'])->name('ngoaingu.xoa');

    Route::get('/dantoc',[DanTocController::class,'getdanhsach'])->name('dantoc');
    Route::get('/dantoc/them',[DanTocController::class,'getThem'])->name('dantoc.them');
    Route::post('/dantoc/them',[DanTocController::class,'postThem'])->name('dantoc.them');
    Route::get('/dantoc/sua/{id}',[DanTocController::class,'getSua'])->name('dantoc.sua');
    Route::post('/dantoc/sua/{id}',[DanTocController::class,'postSua'])->name('dantoc.sua');
    Route::get('/dantoc/xoa/{id}',[DanTocController::class,'getXoa'])->name('dantoc.xoa');

    Route::get('/thuongphat',[ThuongPhatController::class,'getdanhsach'])->name('thuongphat');
    Route::get('/thuongphat/them',[ThuongPhatController::class,'getThem'])->name('thuongphat.them');
    Route::post('/thuongphat/them',[ThuongPhatController::class,'postThem'])->name('thuongphat.them');
    Route::get('/thuongphat/sua/{id}',[ThuongPhatController::class,'getSua'])->name('thuongphat.sua');
    Route::post('/thuongphat/sua/{id}',[ThuongPhatController::class,'postSua'])->name('thuongphat.sua');
    Route::get('/thuongphat/xoa/{id}',[ThuongPhatController::class,'getXoa'])->name('thuongphat.xoa');

    Route::get('/hopdong',[HopDongController::class,'getdanhsach'])->name('hopdong');
    Route::get('/hopdong/them',[HopDongController::class,'getThem'])->name('hopdong.them');
    Route::post('/hopdong/them',[HopDongController::class,'postThem'])->name('hopdong.them');
    Route::get('/hopdong/sua/{id}',[HopDongController::class,'getSua'])->name('hopdong.sua');
    Route::post('/hopdong/sua/{id}',[HopDongController::class,'postSua'])->name('hopdong.sua');
    Route::get('/hopdong/xoa/{id}',[HopDongController::class,'getXoa'])->name('hopdong.xoa');

    Route::get('/ungluong',[UngLuongController::class,'getdanhsach'])->name('ungluong');
    Route::get('/ungluong/them',[UngLuongController::class,'getThem'])->name('ungluong.them');
    Route::post('/ungluong/them',[UngLuongController::class,'postThem'])->name('ungluong.them');
    Route::get('/ungluong/sua/{id}',[UngLuongController::class,'getSua'])->name('ungluong.sua');
    Route::post('/ungluong/sua/{id}',[UngLuongController::class,'postSua'])->name('ungluong.sua');
    Route::get('/ungluong/xoa/{id}',[UngLuongController::class,'getXoa'])->name('ungluong.xoa');

    Route::get('/loaibaohiem',[LoaiBaoHiemController::class,'getdanhsach'])->name('loaibaohiem');
    Route::get('/loaibaohiem/them',[LoaiBaoHiemController::class,'getThem'])->name('loaibaohiem.them');
    Route::post('/loaibaohiem/them',[LoaiBaoHiemController::class,'postThem'])->name('loaibaohiem.them');
    Route::get('/loaibaohiem/sua/{id}',[LoaiBaoHiemController::class,'getSua'])->name('loaibaohiem.sua');
    Route::post('/loaibaohiem/sua/{id}',[LoaiBaoHiemController::class,'postSua'])->name('loaibaohiem.sua');
    Route::get('/loaibaohiem/xoa/{id}',[LoaiBaoHiemController::class,'getXoa'])->name('loaibaohiem.xoa');

    Route::get('/mucluong',[MucLuongController::class,'getdanhsach'])->name('mucluong');
    Route::get('/mucluong/them',[MucLuongController::class,'getThem'])->name('mucluong.them');
    Route::post('/mucluong/them',[MucLuongController::class,'postThem'])->name('mucluong.them');
    Route::get('/mucluong/sua/{id}',[MucLuongController::class,'getSua'])->name('mucluong.sua');
    Route::post('/mucluong/sua/{id}',[MucLuongController::class,'postSua'])->name('mucluong.sua');
    Route::get('/mucluong/xoa/{id}',[MucLuongController::class,'getXoa'])->name('mucluong.xoa');

    Route::get('/lichnghi',[LichNghiController::class,'getdanhsach'])->name('lichnghi');
    Route::get('/lichnghi/them',[LichNghiController::class,'getThem'])->name('lichnghi.them');
    Route::post('/lichnghi/them',[LichNghiController::class,'postThem'])->name('lichnghi.them');
    Route::get('/lichnghi/sua/{id}',[LichNghiController::class,'getSua'])->name('lichnghi.sua');
    Route::post('/lichnghi/sua/{id}',[LichNghiController::class,'postSua'])->name('lichnghi.sua');
    Route::get('/lichnghi/xoa/{id}',[LichNghiController::class,'getXoa'])->name('lichnghi.xoa');

    Route::get('/chucvu',[ChucVuController::class,'getdanhsach'])->name('chucvu');
    Route::get('/chucvu/them',[ChucVuController::class,'getThem'])->name('chucvu.them');
    Route::post('/chucvu/them',[ChucVuController::class,'postThem'])->name('chucvu.them');
    Route::get('/chucvu/sua/{id}',[ChucVuController::class,'getSua'])->name('chucvu.sua');
    Route::post('/chucvu/sua/{id}',[ChucVuController::class,'postSua'])->name('chucvu.sua');
    Route::get('/chucvu/xoa/{id}',[ChucVuController::class,'getXoa'])->name('chucvu.xoa');

    Route::get('/nghiviec',[NghiViecController::class,'getdanhsach'])->name('nghiviec');
    Route::get('/nghiviec/them',[NghiViecController::class,'getThem'])->name('nghiviec.them');
    Route::post('/nghiviec/them',[NghiViecController::class,'postThem'])->name('nghiviec.them');
    Route::get('/nghiviec/sua/{id}',[NghiViecController::class,'getSua'])->name('nghiviec.sua');
    Route::post('/nghiviec/sua/{id}',[NghiViecController::class,'postSua'])->name('nghiviec.sua');
    Route::get('/nghiviec/xoa/{id}',[NghiViecController::class,'getXoa'])->name('nghiviec.xoa');
});

