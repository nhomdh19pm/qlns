<?php

namespace App\Http\Controllers;


use App\Models\UngLuong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class UngLuongController extends Controller
{
    public function getDanhSach(){
        $ungluong = ungluong::all();
        return view('ungluong.index',compact('ungluong'));
    }
    public function getThem()
    {

        $this->validate($request, [
            'mucluong_id' => ['required'],
            'bangcap_id' => ['required'],
            'chuyemon_id' => ['required', 'max:255', 'unique:phim'],
            'ngoaingu_id' => ['required', 'string'],
            'dantoc_id' => ['required', 'string'],
            'tongiao_id' => ['required', 'string'],
            'hovaten' => ['required', 'max:255', 'unique:nhanvien'],
            'gioitinh' => ['required', 'string'],
            'ngaysinh' => ['required', 'image'],
            'ngaysanxuat' => ['required', 'date'],
        ]);
        $orm = new phim();
        $orm->loaiphim_id = $request->loaiphim_id;
        $orm->dangphim_id = $request->dangphim_id;
        $orm->tenphim = $request->tenphim;
        $orm->thoigian = $request->thoigian;
        $orm->tomtat = $request->tomtat;
        $orm->luotxem = $request->luotxem;
        $orm->dienvien = $request->dienvien;
        $orm->quocgia = $request->quocgia;
        $orm->daodien = $request->daodien;
        $orm->ngaysanxuat = $request->ngaysanxuat;
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/images/', $filename);
            $orm->hinhanh = $filename;
        }
        $orm->save();
        return redirect()->route('phim');
    }

    public function postThem(Request $request)
    {
        

    }

}
