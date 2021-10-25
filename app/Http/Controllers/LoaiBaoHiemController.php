<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LoaiBaoHiem;

class LoaiBaoHiemController extends Controller
{
    public function getDanhSach(){
        $loaibaohiem = loaibaohiem::all();
        return view('loaibaohiem.index',compact('loaibaohiem'));
    }
    public function getThem(){
        
        return view('loaibaohiem.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenbh' => ['required', 'max:255', 'unique:loaibaohiem'],
            ]);
        $orm = new loaiBaoHiem();
        $orm->tenbh = $request->tenbh;
        $orm->save();
        return redirect()->route('loaibaohiem');
    }
    public function getSua($id){
        $loaibaohiem = loaibaohiem::find($id);
        return view('loaibaohiem.sua',compact('loaibaohiem'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tenbh' => ['required', 'max:255', 'unique:loaibaohiem'],
        ]);
        $orm = loaibaohiem::find($id);
        $orm->tenbh = $request->tenbh;
        $orm->save();
        return redirect()->route('loaibaohiem');
    }
    public function getXoa($id){
        $orm = loaibaohiem::find($id);
        $orm->delete();
        return redirect()->route('loaibaohiem');
    }
}
