<?php

namespace App\Http\Controllers;

use App\Models\ChamCong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class ChamCongController extends Controller
{
    public function getDanhSach(){
        //$chamcong = chamcong::all();
        $chamcong = chamcong::all();
        return view('chamcong.index',compact('chamcong'));
    }
    public function getThem(){
        
        $nhanvien = nhanvien::all();
        return view('chamcong.them', compact('nhanvien'));
    }
    public function postThem(Request $request){
        // $this->validate($request, [
        //     'tenbc' => ['required', 'max:255', 'unique:bangcap'],
        //     ]);
        $orm = new chamcong();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->songaycong = $request->songaycong;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('chamcong');
    }
    public function getSua($id){
        $chamcong = chamcong::find($id);
        $nhanvien = nhanvien::all();
        return view('chamcong.sua',compact('chamcong','nhanvien'));
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
        $orm = chamcong::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->songaycong = $request->songaycong;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('chamcong');
    }
    public function getXoa($id){
        $orm = chamcong::find($id);
        $orm->delete();
        return redirect()->route('chamcong');
    }
}
