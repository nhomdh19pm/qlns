<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\NhanVien;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $user = user::all();
        return view('user.index', ['user' => $user]);
    }
    public function getThem()
    {
        $nhanvien = nhanvien::all();
        return view('user.them', compact('nhanvien'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'chucvu' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $orm = new user();
        $orm->name = $request->name;
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->chucvu = $request->chucvu;
        $orm->password = Hash::make($request->password);
        $orm->save();
        return redirect()->route('user');
    }
    public function getSua($id)
    {
        $nhanvien = nhanvien::all();
        $user = user::find($id);
        return view('user.sua', compact('user', 'nhanvien'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users' .$request->id],
            'chucvu' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $orm = user::find($id);
        $orm->name = $request->name;
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->chucvu = $request->chucvu;
        $orm->password = Hash::make($request->password);
        $orm->save();
        return redirect()->route('user');
    }
    public function getXoa($id)
    {
        $orm = user::find($id);
        $orm->delete();

        return redirect()->route('user');
    }
    public function index()
    {
        return view('frontend.user');
    }

    public function index2()
    {
        return view('frontend.user');
    }
}
