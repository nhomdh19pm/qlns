<?php

namespace App\Http\Controllers;


use App\Models\ThuongPhat;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class ThuongPhatController extends Controller
{
    public function getDanhSach(){
        $thuongphat = thuongphat::all();
        return view('thuongphat.index',compact('thuongphat'));
    }
    public function getThem()
    {
        $nhanvien = nhanvien::all();
        return view('thuongphat.them', compact('nhanvien'));
        
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'loaihopdong' => ['required'],
        //     'ngaybd' => ['required', 'date'],
        //     'ngaykt' => ['required', 'date'],
        // ]);
        $orm = new thuongphat();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loai = $request->loai;
        $orm->sotien = $request->sotien;
        $orm->lydo = $request->lydo;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('thuongphat');

    }

    public function getSua($id){
        $thuongphat = thuongphat::find($id);
        $nhanvien = nhanvien::all();
        return view('thuongphat.sua',compact('thuongphat','nhanvien'));
    }
    public function postSua( Request $request,$id)
    {
        $request->validate([
            'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
            'loai' => ['required'],
            'lydo' => ['required'],
            'sotien' => ['required'],
            'thang' => ['required'],
            'nam' => ['required'],
        ]);
        $orm = thuongphat::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loai = $request->loai;
        $orm->lydo = $request->lydo;
        $orm->sotien = $request->sotien;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('thuongphat');

    }
    
    public function getXoa($id){
        $orm = thuongphat::find($id);
        $orm->delete();
        return redirect()->route('thuongphat');
       
    }
}
