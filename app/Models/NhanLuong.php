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
