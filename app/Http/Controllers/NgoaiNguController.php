<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NgoaiNgu;

class NgoaiNguController extends Controller
{
    public function getDanhSach(){
        $ngoaingu = ngoaingu::all();
        return view('ngoaingu.index',compact('ngoaingu'));
    }
    public function getThem(){
        
        return view('ngoaingu.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenng' => ['required', 'max:255', 'unique:ngoaingu'],
            ]);
        $orm = new ngoaingu();
        $orm->tenng = $request->tenng;
        $orm->save();
        return redirect()->route('ngoaingu');
    }
    public function getSua($id){
        $ngoaingu = ngoaingu::find($id);
        return view('ngoaingu.sua',compact('ngoaingu'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tenng' => ['required', 'max:255', 'unique:ngoaingu'],
        ]);
        $orm = ngoaingu::find($id);
        $orm->tenng = $request->tenng;
        $orm->save();
        return redirect()->route('ngoaingu');
    }
    public function getXoa($id){
        $orm = ngoaingu::find($id);
        $orm->delete();
        return redirect()->route('ngoaingu');
    }
}
