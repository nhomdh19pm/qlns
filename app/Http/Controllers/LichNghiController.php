<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\lichnghi;

class LichNghiController extends Controller
{
    public function getDanhSach(){
        $lichnghi = lichnghi::all();
        return view('lichnghi.index',compact('lichnghi'));
    }
    public function getThem(){
        
        return view('lichnghi.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tenln' => ['required', 'max:255', 'unique:lichnghi'],
            'ngaybd' => ['required', 'date'],
            'ngaykt' => ['required', 'date'],
            'huongluong' => ['required', 'numeric'],
            ]);
        $orm = new lichnghi();
        $orm->tenln = $request->tenln;
        $orm->ngaybd = $request->ngaybd;
        $orm->ngaykt = $request->ngaykt;
        $orm->huongluong = $request->huongluong;
        $orm->save();
        return redirect()->route('lichnghi');
    }
    public function getSua($id){
        $lichnghi = lichnghi::find($id);
        return view('lichnghi.sua',compact('lichnghi'));
    }
    public function postSua( Request $request,$id)
    {
        // $this->validate($request, [
        //     'tenln' => ['required', 'max:255', 'unique:lichnghi'],
        //     'ngaybd' => ['required', 'date'],
        //     'ngaykt' => ['required', 'date'],
        //     'huongluong' => ['required'],
        // ]);
        $orm = lichnghi::find($id);
        $orm->tenln = $request->tenln;
        $orm->ngaybd = $request->ngaybd;
        $orm->ngaykt = $request->ngaykt;
        $orm->huongluong = $request->huongluong;
        $orm->save();
        return redirect()->route('lichnghi');
    }
    public function getXoa($id){
        $orm = lichnghi::find($id);
        $orm->delete();
        return redirect()->route('lichnghi');
    }
}
