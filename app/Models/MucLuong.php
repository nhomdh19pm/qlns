<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MucLuong extends Model
{
    use HasFactory;

    protected $table = 'mucluong';
    protected $fillable = [
        'phongban_id',
        'chucvu_id',
        'luongcb',
        'phucap',
    ];

    public function phongban()
    {
        return $this->belongsTo(PhongBan::class, 'phongban_id', 'id');
    }

    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class, 'chucvu_id', 'id');
    }

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class,'nhanvien_id', 'id');
    }

}
