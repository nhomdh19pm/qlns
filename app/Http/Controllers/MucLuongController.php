<?php

namespace App\Http\Controllers;


use App\Models\MucLuong;
use App\Models\ChucVu;
use App\Models\PhongBan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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

        
    }

    public function postThem(Request $request)
    {
        

    }

}
