<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DanToc;

class DanTocController extends Controller
{
    public function getDanhSach(){
        $dantoc = dantoc::all();
        return view('dantoc.index',compact('dantoc'));
    }
    public function getThem(){
        
        return view('dantoc.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tendt' => ['required', 'max:255', 'unique:dantoc'],
            ]);
        $orm = new dantoc();
        $orm->tendt = $request->tendt;
        $orm->save();
        return redirect()->route('dantoc');
    }
    public function getSua($id){
        $dantoc = dantoc::find($id);
        return view('dantoc.sua',compact('dantoc'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tendt' => ['required', 'max:255', 'unique:dantoc'],
        ]);
        $orm = dantoc::find($id);
        $orm->tendt = $request->tendt;
        $orm->save();
        return redirect()->route('dantoc');
    }
    public function getXoa($id){
        $orm = dantoc::find($id);
        $orm->delete();
        return redirect()->route('dantoc');
    }
}
