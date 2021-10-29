<?php

namespace App\Http\Controllers;


use App\Models\UngLuong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
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
        
        $nhanvien = nhanvien::all();
        return view('ungluong.them', compact('nhanvien'));
        
    }

    public function postThem(Request $request)
    {
        $request->validate([
            'nhanvien_id' => ['required', Rule::exists('nhanvien', 'id')],
            'sotien' => ['required', 'string'],
            'lydo' => ['required', 'string'],
            'thang' => ['required', 'string'],
            'nam' => ['required', 'string'],
        ]);
        $orm = new ungluong();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->sotien = $request->sotien;
        $orm->lydo = $request->lydo;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('ungluong');

    }

    public function getSua($id){
        $ungluong = ungluong::find($id);
        $nhanvien = nhanvien::all();
        return view('ungluong.sua',compact('ungluong','nhanvien'));
    }
    public function postSua( Request $request,$id)
    {
        $request->validate([
            'nhanvien_id' => ['required', Rule::exists('nhanvien', 'id')],
            'sotien' => ['required', 'string'],
            'lydo' => ['required', 'string'],
            'thang' => ['required', 'string'],
            'nam' => ['required', 'string'],
        ]);
        $orm = ungluong::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->sotien = $request->sotien;
        $orm->lydo = $request->lydo;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('ungluong');
    }
    
    public function getXoa($id){
        $orm = ungluong::find($id);
        $orm->delete();
        return redirect()->route('ungluong');
       
    }

}
