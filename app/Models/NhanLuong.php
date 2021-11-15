<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NhanLuong extends Model
{
    use HasFactory;


    protected $table = 'nhanluong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }

    public function getPhuCap($nhanvienId)
    {
        return DB::table('nhanvien')
        ->join('mucluong as m', 'nhanvien.mucluong_id', '=', 'm.id')
        ->where('nhanvien.id', '=', $nhanvienId)
        ->first()->phucap ?? 0;
    }

    public function getNgayCong($nhanvienId, $thang, $nam)
    {
        return DB::table('nhanvien')
        ->join('chamcong as c', 'nhanvien.id', '=', 'c.nhanvien_id')
        ->where('nhanvien.id', '=', $nhanvienId)
        ->where('c.thang', '=', $thang)
        ->where('c.nam', '=', $nam)
        ->first()->songaycong ?? 0;
    }

    public function getNghiViec($nhanvienId)
    {
        return DB::table('nhanvien')
        ->join('nghiviec as n', 'nhanvien.id', '=', 'n.nhanvien_id')
        ->where('nhanvien.id', '=', $nhanvienId)
        ->first()->huongluong ?? 0;
    }

    public function getThuongPhat($nhanvienId, $thang, $nam)
    {
        return DB::table('nhanvien')
        ->join('thuongphat as t', 'nhanvien.id', '=', 't.nhanvien_id')
        ->where('nhanvien.id', '=', $nhanvienId)
        ->where('t.thang', '=', $thang)
        ->where('t.nam', '=', $nam)
        ->first()->sotien ?? 0;
    }

    public function getBaoHiem($nhanvienId)
    {
        return DB::table('nhanvien')
        ->join('baohiem as b', 'nhanvien.id', '=', 'b.nhanvien_id')
        ->where('nhanvien.id', '=', $nhanvienId)
        ->first()->mucdong ?? 0;
    }
    
    public static function getvalue()
    {
        return DB::table('nhanluong')
        ->select('nhanluong.id','nhanvien.hovaten','nhanvien.hesoluong','mucluong.phucap','chamcong.songaycong','thuongphat.sotien')
        ->join('nhanvien','nhanvien.phongban_id','=','phongban.id')
        ->join('chucvu','mucluong.chucvu_id','=','chucvu.id')
        ->orderBy('phongban.id')
        ->get();
        
    }
}
