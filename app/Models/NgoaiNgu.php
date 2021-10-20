<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NgoaiNgu extends Model
{
    use HasFactory;

    protected $table = 'ngoaingu';

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }
}
