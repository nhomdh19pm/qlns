<?php

namespace App\Http\Controllers;

use App\Models\NhanLuong;
use App\Models\NhanVien;
use App\Models\ChamCong;
use CreateNhanvienTable;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NhanLuongController extends Controller
{
    public function getDanhSach(){
        // id = 2
        $phucap = (new NhanLuong())->getPhuCap(2);
        // dd($test);
        // return '';
        // $nhanvien_id = $_GET['id'];
        $nhanluong = nhanvien::all();

        return view('nhanluong.index',compact('nhanluong'));
    }

    // public function getDanhSachNhanVien(){
    //     // id = 2
    //     $id = $_GET['id'];
    //     $phucap = (new NhanLuong())->getPhuCap(2);
    //     // dd($test);
    //     // return '';
    //     // $nhanvien_id = $_GET['id'];
    //     $nhanluong = nhanvien::all();

    //     return view('nhanluong.index2',compact('nhanluong'));
    // }

    public function getThem()
    {
        $id = $_GET['id'];
        if($id == null){
            return 'abc';            
        }
        $nhanvien = nhanvien::all();
        $phucap = (new NhanLuong())->getPhuCap($id);       
        $ngaycong = (new NhanLuong())->getNgayCong($id, 11, 2021);    
        $thuong = (new NhanLuong())->getThuongPhat($id, 11, 2021, 1);  
        $phat = (new NhanLuong())->getThuongPhat($id, 11, 2021, 1);
        $ungluong = (new NhanLuong())->getUngLuong($id);
        return view('nhanluong.them', compact('nhanvien', 'phucap', 'ngaycong', 'thuong', 'phat', 'ungluong'));
    }

    public function postThem(Request $request)
    {
        // $request->validate([
        //     'chucvu_id' => ['required', Rule::exists('chucvu', 'id')],
        //     'phongban_id' => ['required',Rule::exists('phongban', 'id')],
        //     'luongcb' => ['required', 'string'],
        //     'phucap' => ['required', 'string'],
        // ]);
        $orm = new nhanluong();
        $orm->nhanvien_id = $request->nhanvien_id;
        $orm->phucap = $request->phucap;
        $orm->luongcb = $request->luongcb;
        $orm->hesoluong = $request->hesoluong;
        $orm->songaycong = $request->songaycong;
        $orm->thuong = $request->thuong;
        $orm->phat = $request->phat;
        $orm->tamung = $request->tamung;
        $orm->khautru = $request->khautru;
        $orm->thang = $request->thang;
        $orm->nam = $request->nam;
        $orm->save();
        return redirect()->route('nhanluong');

    } 
}
