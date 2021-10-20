<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanToc extends Model
{
    use HasFactory;

    protected $table = 'dantoc';

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }
}
