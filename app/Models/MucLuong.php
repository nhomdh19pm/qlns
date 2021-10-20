<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MucLuong extends Model
{
    use HasFactory;

    protected $table = 'mucluong';

    public function phongban()
    {
        return $this->belongsTo(PhongBan::class);
    }

    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class);
    }

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }

    public function getAll()
    {
        return DB::table('mucluong')
            ->join('phongban', 'mucluong.phongban_id', '=', 'phongban.id')
            ->join('chucvu', 'mucluong.chucvu_id', '=', 'chucvu.id')
            ->select('mucluong.id', 'phongban.tenpb', 'chucvu.tencv')
            ->orderBy('phongban.id')
            ->get();
    }
}
