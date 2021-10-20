<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PhongBan;

class phongbanController extends Controller
{
    public function getDanhSach(){
        $phongban = phongban::all();
        return view('phongban.index',compact('phongban'));
    }
    public function getThem(){
        
        return view('phongban.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenpb' => ['required', 'max:255', 'unique:phongban'],
            ]);
        $orm = new phongban();
        $orm->tenpb = $request->tenpb;
        $orm->save();
        return redirect()->route('phongban');
    }
    public function getSua($id){
        $phongban = phongban::find($id);
        return view('phongban.sua',compact('phongban'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tenpb' => ['required', 'max:255', 'unique:phongban'],
        ]);
        $orm = phongban::find($id);
        $orm->tenpb = $request->tenpb;
        $orm->save();
        return redirect()->route('phongban');
    }
    public function getXoa($id){
        $orm = phongban::find($id);
        $orm->delete();
        return redirect()->route('phongban');
    }
}
