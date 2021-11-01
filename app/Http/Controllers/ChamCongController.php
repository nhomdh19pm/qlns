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
        $chamcong = nhanvien::all();
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
        $orm->save();
        return redirect()->route('chamcong');
    }
    // public function getSua($id){
    //     $bangcap = bangcap::find($id);
    //     return view('bangcap.sua',compact('bangcap'));
    // }
    // public function postSua( Request $request,$id)
    // {
    //     $this->validate($request, [
    //         'tenbc' => ['required', 'max:255', 'unique:bangcap'],
    //     ]);
    //     $orm = bangcap::find($id);
    //     $orm->tenbc = $request->tenbc;
    //     $orm->save();
    //     return redirect()->route('bangcap');
    // }
    public function getXoa($id){
        $orm = bangcap::find($id);
        $orm->delete();
        return redirect()->route('bangcap');
    }
}
