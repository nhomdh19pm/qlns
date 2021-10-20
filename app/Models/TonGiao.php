<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TonGiao extends Model
{
    use HasFactory;

    protected $table = 'tongiao';

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class, 'tongiao_id', 'id');
    }
}
