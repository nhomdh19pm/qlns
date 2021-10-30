<?php

namespace App\Http\Controllers;


use App\Models\MucLuong;
use App\Models\ChucVu;
use App\Models\PhongBan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class MucLuongController extends Controller
{
    public function getDanhSach(){
        $mucluong = mucluong::all();
        return view('mucluong.index',compact('mucluong'));
    }
    public function getThem()
    {
        $chucvu = chucvu::all();
        $phongban = phongban::all(); 
        return view('mucluong.them', compact('chucvu', 'phongban'));
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'chucvu_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'phongban_id' => ['required',Rule::exists('phongban', 'id')],
        //     'luongcb' => ['required', 'string'],
        //     'phucap' => ['required', 'string'],
        // ]);
        $orm = new mucluong();
        $orm->chucvu_id = $request->chucvu_id;
        $orm->phongban_id = $request->phongban_id;
        $orm->luongcb = $request->luongcb;
        $orm->phucap = $request->phucap;
        $orm->save();
        return redirect()->route('mucluong');

    } 
    public function getXoa($id)
    {
        $orm = mucluong::find($id);
        $orm->delete();
        return redirect()->route('mucluong');
    }

}
