<?php

namespace App\Http\Controllers;


use App\Models\HopDong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class HopDongController extends Controller
{
    public function getDanhSach(){
        $hopdong = hopdong::all();
        return view('hopdong.index',compact('hopdong'));
    }
    public function getThem()
    {
        $nhanvien = nhanvien::all();
        return view('hopdong.them', compact('nhanvien'));
        
    }

    public function postThem(Request $request)
    {
        $request->validate([
            'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
            'loaihopdong' => ['required'],
            'ngaybd' => ['required', 'date'],
            'ngaykt' => ['required', 'date'],
        ]);
        $orm = new hopdong();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loaihopdong = $request->loaihopdong;
        $orm->ngaybd = $request->ngaybd;
        $orm->ngaykt = $request->ngaykt;
        $orm->save();
        return redirect()->route('hopdong');

    }
    public function getSua($id){
        $hopdong = hopdong::find($id);
        $nhanvien = nhanvien::all();
        return view('hopdong.sua',compact('hopdong','nhanvien'));
    }
    public function postSua( Request $request,$id)
    {
        $request->validate([
            'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
            'loaihopdong' => ['required'],
            'ngaybd' => ['required', 'date'],
            'ngaykt' => ['required', 'date'],
        ]);
        $orm = hopdong::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loaihopdong = $request->loaihopdong;
        $orm->ngaybd = $request->ngaybd;
        $orm->ngaykt = $request->ngaykt;
        $orm->save();
        return redirect()->route('hopdong');

    }
    public function getXoa($id){
        $orm = hopdong::find($id);
        $orm->delete();
        return redirect()->route('hopdong');
    }
}