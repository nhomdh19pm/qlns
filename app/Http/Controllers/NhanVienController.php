<?php

namespace App\Http\Controllers;

use App\Models\BangCap;
use App\Models\ChuyenMon;
use App\Models\NhanVien;
use App\Models\MucLuong;
use App\Models\DanToc;
use App\Models\TonGiao;
use App\Models\NgoaiNgu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NhanVienController extends Controller
{
    public function getDanhSach(){
        $nhanvien = nhanvien::all();
        return view('nhanvien.index',compact('nhanvien'));
    }
    public function getThem()
    {
        $mucluong = mucluong::all();
        $bangcap = bangcap::all(); 
        $chuyenmon = chuyenmon::all(); 
        $ngoaingu = ngoaingu::all(); 
        $dantoc = dantoc::all(); 
        $tongiao = tongiao::all(); 
        return view('nhanvien.them', compact('mucluong', 'bangcap','chuyenmon','ngoaingu','dantoc','tongiao'));
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'mucluong_id' => ['required', Rule::exists('mucluong', 'id')],
        //     'bangcap_id' => ['required', Rule::exists('bangcap', 'id')],
        //     'chuyemon_id' => ['required', Rule::exists('chuyemon', 'id')],
        //     'ngoaingu_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'dantoc_id' => ['required', Rule::exists('dantoc', 'id')],
        //     'tongiao_id' => ['required',Rule::exists('tongiao', 'id')],
        //     'hovaten' => ['required', 'string'],
        //     'gioitinh' => ['required', 'string'],
        //     'ngaysinh' => ['required', 'date'],
        //     'cmnd' => ['required', 'string'],
        //     'sdt' => ['required', 'string'],
        //     'diachi' => ['required', 'string'],
        //     'quequan' => ['required', 'string'],
        //     'trangthai' => ['required', 'string'],
        //     'ngaynghilam' => ['required', 'date'],
        //     'hesoluong' => ['required', 'string'],
        // ]);
        $orm = new nhanvien();
        $orm->mucluong_id = $request->mucluong_id;
        $orm->bangcap_id = $request->bangcap_id;
        $orm->chuyenmon_id = $request->chuyenmon_id;
        $orm->ngoaingu_id = $request->ngoaingu_id;
        $orm->dantoc_id = $request->dantoc_id;
        $orm->tongiao_id = $request->tongiao_id;
        $orm->hovaten = $request->hovaten;
        $orm->gioitinh = $request->gioitinh;
        $orm->ngaysinh = $request->ngaysinh;
        $orm->cmnd = $request->cmnd;
        $orm->sdt = $request->sdt;
        $orm->diachi = $request->diachi;
        $orm->quequan = $request->quequan;
        $orm->trangthai = $request->trangthai;
        $orm->ngaynghilam = $request->ngaynghilam;
        $orm->hesoluong = $request->hesoluong;
        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/images/', $filename);
            $orm->photo_path = $filename;
        }
        $orm->save();
        return redirect()->route('nhanvien');

    }
    public function getSua($id){
        $nhanvien = nhanvien::find($id);
        $mucluong = mucluong::all();
        $bangcap = bangcap::all(); 
        $chuyenmon = chuyenmon::all(); 
        $ngoaingu = ngoaingu::all(); 
        $dantoc = dantoc::all(); 
        $tongiao = tongiao::all(); 
        return view('nhanvien.sua', compact('nhanvien','mucluong', 'bangcap','chuyenmon','ngoaingu','dantoc','tongiao'));
    }
    public function postSua( Request $request,$id)
    {
        // $request->validate([
        //     'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'loai' => ['required'],
        //     'lydo' => ['required'],
        //     'sotien' => ['required'],
        //     'thang' => ['required'],
        //     'nam' => ['required'],
        // ]);
        $orm = nhanvien::find($id);
        $orm->mucluong_id = $request->mucluong_id;
        $orm->bangcap_id = $request->bangcap_id;
        $orm->chuyenmon_id = $request->chuyenmon_id;
        $orm->ngoaingu_id = $request->ngoaingu_id;
        $orm->dantoc_id = $request->dantoc_id;
        $orm->tongiao_id = $request->tongiao_id;
        $orm->hovaten = $request->hovaten;
        $orm->gioitinh = $request->gioitinh;
        $orm->ngaysinh = $request->ngaysinh;
        $orm->cmnd = $request->cmnd;
        $orm->sdt = $request->sdt;
        $orm->diachi = $request->diachi;
        $orm->quequan = $request->quequan;
        $orm->trangthai = $request->trangthai;
        $orm->ngaynghilam = $request->ngaynghilam;
        $orm->hesoluong = $request->hesoluong;
        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/images/', $filename);
            $orm->photo_path = $filename;
        }
        $orm->save();
        return redirect()->route('nhanvien');

    }


    public function getXoa($id)
    {
        $orm = nhanvien::find($id);
        $orm->delete();
        return redirect()->route('nhanvien');
    }

}
