<?php

namespace App\Http\Controllers;


use App\Models\ThuongPhat;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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
        $this->validate($request, [
            'nhanvien_id' => ['required'],
            'loai' => ['required', 'unique:thuongphat'],
            'sotien' => ['required', 'string'],
            'lydo' => ['required', 'string'],
            'thang' => ['required', 'string'],
            'nam' => ['required', 'string'],
        ]);
        $orm = mucluong::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loai = $request->loai;
        $orm->sotien = $request->sotien;
        $orm->lydo = $request->lydo;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('mucluong');

    }
    public function getXoa($id){
        $orm = thuongphat::find($id);
        $orm->delete();
        return redirect()->route('thuongphat');
       
    }
}
