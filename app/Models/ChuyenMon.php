<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenMon extends Model
{
    use HasFactory;

    protected $table = 'chuyenmon';

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }
}
