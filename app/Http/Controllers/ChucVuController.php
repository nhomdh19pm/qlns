<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ChucVu;

class ChucVuController extends Controller
{
    public function getDanhSach(){
        $chucvu = chucvu::all();
        return view('chucvu.index',compact('chucvu'));
    }
    public function getThem(){
        
        return view('chucvu.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tencv' => ['required', 'max:255', 'unique:chucvu'],
            ]);
        $orm = new chucvu();
        $orm->tencv = $request->tencv;
        $orm->save();
        return redirect()->route('chucvu');
    }
    public function getSua($id){
        $chucvu = chucvu::find($id);
        return view('chucvu.sua',compact('chucvu'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tencv' => ['required', 'max:255', 'unique:chucvu'],
        ]);
        $orm = chucvu::find($id);
        $orm->tencv = $request->tencv;
        $orm->save();
        return redirect()->route('chucvu');
    }
    public function getXoa($id){
        $orm = chucvu::find($id);
        $orm->delete();
        return redirect()->route('chucvu');
    }
}
