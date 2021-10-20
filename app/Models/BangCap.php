<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangCap extends Model
{
    use HasFactory;

    protected $table = 'bangcap';

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }
}
