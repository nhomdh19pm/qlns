<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThuongPhat extends Model
{
    use HasFactory;

    protected $table = 'thuongphat';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }

    public static function getname()
    {
        return DB::table('thuongphat')
        ->select('thuongphat.id','nhanvien.hovaten')
        ->join('thuongphat','thuongphat.nhanvien_id','=','nhanvien.id')
        ->orderBy('nhanvien.id')
        ->get();
        
    }
}
