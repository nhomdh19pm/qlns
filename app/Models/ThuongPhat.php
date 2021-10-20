<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongPhat extends Model
{
    use HasFactory;

    protected $table = 'thuongphat';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
