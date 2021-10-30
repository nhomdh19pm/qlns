<?php

namespace App\Http\Controllers;


use App\Models\BaoHiem;
use App\Models\NhanVien;
use App\Models\LoaiBaoHiem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class BaoHiemController extends Controller
{
    public function getDanhSach(){
        $baohiem = baohiem::all();
        return view('baohiem.index',compact('baohiem'));
    }
    public function getThem()
    {
        $nhanvien = nhanvien::all();
        $loaibaohiem = loaibaohiem::all(); 
        return view('baohiem.them', compact('nhanvien', 'loaibaohiem'));
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'nhannvien_id' => ['required', Rule::exists('nhanvien', 'id')],
        //     'loaibaohiem_id' => ['required',Rule::exists('loaibaohiem', 'id')],
        //     'maso' => ['required', 'string'],
        //     'noicap' => ['required', 'string'],
        //     'ngaycap' => ['required', 'date'],
        //     'ngayhethan' => ['required', 'date'],
        //     'mucdong' => ['required', 'string'],
        // ]);
        $orm = new baohiem();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->loaibaohiem_id = $request->loaibaohiem_id;
        $orm->maso = $request->maso;
        $orm->noicap = $request->noicap;
        $orm->ngaycap = $request->ngaycap;
        $orm->ngayhethan = $request->ngayhethan;
        $orm->mucdong = $request->mucdong;
        $orm->save();
        return redirect()->route('baohiem');

    } 
    public function getXoa($id)
    {
        $orm = baohiem::find($id);
        $orm->delete();
        return redirect()->route('baohiem');
    }

}
