<?php

namespace App\Http\Controllers;

use App\Models\NhanLuong;
use App\Models\NhanVien;
use App\Models\ChamCong;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NhanLuongController extends Controller
{
    public function getDanhSach(){
        // id = 2
        $test = (new NhanLuong())->getThuongPhat(2, 11, 2021);
        dd($test);
        return '';
        // $nhanluong = nhanvien::all();
        // $chamcong = chamcong::all();
        // return view('nhanluong.index',compact('nhanluong', 'chamcong'));
    }
}
