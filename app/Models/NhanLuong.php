<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NhanLuong extends Model
{
    use HasFactory;


    protected $table = 'nhanluong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }
}
