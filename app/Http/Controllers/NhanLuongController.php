<?php

namespace App\Http\Controllers;

use App\Models\NhanLuong;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NhanLuongController extends Controller
{
    public function getDanhSach(){
        $nhanluong = nhanluong::all();
        return view('nhanluong.index',compact('nhanluong'));
    }

    public function getXoa($id)
    {
        $orm = nhanvien::find($id);
        $orm->delete();
        return redirect()->route('nhanvien');
    }

}
