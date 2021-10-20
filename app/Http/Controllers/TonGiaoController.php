<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TonGiao;

class TonGiaoController extends Controller
{
    public function getDanhSach(){
        $tongiao = tongiao::all();
        return view('tongiao.index',compact('tongiao'));
    }
    public function getThem(){
        
        return view('tongiao.them');
    }
    public function postThem(Request $request){
        $this->validate($request, [
            'tentg' => ['required', 'max:255', 'unique:tongiao'],
            ]);
        $orm = new tongiao();
        $orm->tentg = $request->tentg;
        $orm->save();
        return redirect()->route('tongiao');
    }
    public function getSua($id){
        $tongiao = tongiao::find($id);
        return view('tongiao.sua',compact('tongiao'));
    }
    public function postSua( Request $request,$id)
    {
        $this->validate($request, [
            'tentg' => ['required', 'max:255', 'unique:tongiao'],
        ]);
        $orm = tongiao::find($id);
        $orm->tentg = $request->tenpb;
        $orm->save();
        return redirect()->route('tongiao');
    }
    public function getXoa($id){
        $orm = tongiao::find($id);
        $orm->delete();
        return redirect()->route('tongiao');
    }
}
