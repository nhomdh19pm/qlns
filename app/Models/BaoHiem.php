<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaoHiem extends Model
{
    use HasFactory;

    protected $table = 'baohiem';
    protected $fillable = [
        'nhanvien_id',
        'loaibaohiem_id',
        'maso',
        'noicap',
        'ngaycap',
        'ngayhethan',
        'mucdong',
    ];

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }

    public function loaibaohiem()
    {
        return $this->belongsTo(LoaiBaoHiem::class, 'loaibaohiem_id', 'id');
    }
    
}
