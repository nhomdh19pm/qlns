<?php

namespace App\Http\Controllers;


use App\Models\HopDong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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

        
    }

    public function postThem(Request $request)
    {
        

    }

}
