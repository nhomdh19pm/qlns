<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getDanhSach()
    {
        $user = user::all();
        return view('user.index', ['user' => $nguoidung]);
    }
    public function getThem()
    {
        return view('user.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung'],
            'chucvu' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $orm = new user();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->chucvu = $request->chucvu;
        $orm->password = Hash::make($request->password);
        $orm->save();
        return redirect()->route('user');
    }
    public function getSua($id)
    {
        $user = user::find($id);
        return view('user.sua', compact('user'));
    }
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'max:255', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user,email' .$request->id],
            'chucvu' => ['required'],
            'password' => ['required', 'min:4', 'confirmed'],
        ]);
        $orm = user::find($id);
        $orm->name = $request->name;
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
}
