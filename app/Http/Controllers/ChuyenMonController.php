<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\chuyenmon;

class ChuyenMonController extends Controller
{
    public function getDanhSach(){
        $chuyenmon = chuyenmon::all();
        return view('chuyenmon.index',compact('chuyenmon'));
    }
    public function getThem(){
        
        return view('chuyenmon.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tencm' => ['required', 'max:255', 'unique:chuyenmon'],
            ]);
        $orm = new chuyenmon();
        $orm->tencm = $request->tencm;
        $orm->save();
        return redirect()->route('chuyenmon');
    }
    public function getSua($id){
        $chuyenmon = chuyenmon::find($id);
        return view('chuyenmon.sua',compact('chuyenmon'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tencm' => ['required', 'max:255', 'unique:chuyenmon'],
        ]);
        $orm = chuyenmon::find($id);
        $orm->tencm = $request->tenpb;
        $orm->save();
        return redirect()->route('chuyenmon');
    }
    public function getXoa($id){
        $orm = chuyenmon::find($id);
        $orm->delete();
        return redirect()->route('chuyenmon');
    }
}
