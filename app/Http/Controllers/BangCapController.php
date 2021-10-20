<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\bangcap;

class BangCapController extends Controller
{
    public function getDanhSach(){
        $bangcap = bangcap::all();
        return view('bangcap.index',compact('bangcap'));
    }
    public function getThem(){
        
        return view('bangcap.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenbc' => ['required', 'max:255', 'unique:bangcap'],
            ]);
        $orm = new bangcap();
        $orm->tenbc = $request->tenbc;
        $orm->save();
        return redirect()->route('bangcap');
    }
    public function getSua($id){
        $bangcap = bangcap::find($id);
        return view('bangcap.sua',compact('bangcap'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tenbc' => ['required', 'max:255', 'unique:bangcap'],
        ]);
        $orm = bangcap::find($id);
        $orm->tenbc = $request->tenbc;
        $orm->save();
        return redirect()->route('bangcap');
    }
    public function getXoa($id){
        $orm = bangcap::find($id);
        $orm->delete();
        return redirect()->route('bangcap');
    }
}
