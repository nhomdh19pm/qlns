<?php

namespace App\Http\Controllers;


use App\Models\NghiViec;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class nghiviecController extends Controller
{
    public function getDanhSach(){
        $nghiviec = nghiviec::all();
        return view('nghiviec.index',compact('nghiviec'));
    }
    public function getThem()
    {
        $nhanvien = nhanvien::all();
        return view('nghiviec.them', compact('nhanvien'));
        
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'nhanvien_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'loaihopdong' => ['required'],
        //     'ngaybd' => ['required', 'date'],
        //     'ngaykt' => ['required', 'date'],
        // ]);
        $orm = new nghiviec();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->ngaybd = $request->ngaybd;
        $orm->ngaykt = $request->ngaykt;
        $orm->lydo = $request->lydo;
        $orm->huongluong = $request->huongluong;
        $orm->save();
        return redirect()->route('nghiviec');

    }

    public function getSua($id){
        $nghiviec = nghiviec::find($id);
        $nhanvien = nhanvien::all();
        return view('nghiviec.sua',compact('nghiviec','nhanvien'));
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
        $orm = nghiviec::find($id);
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loai = $request->loai;
        $orm->lydo = $request->lydo;
        $orm->sotien = $request->sotien;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('nghiviec');

    }
    
    public function getXoa($id){
        $orm = nghiviec::find($id);
        $orm->delete();
        return redirect()->route('nghiviec');
       
    }
}
