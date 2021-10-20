<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UngLuong extends Model
{
    use HasFactory;

    protected $table = 'ungluong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
