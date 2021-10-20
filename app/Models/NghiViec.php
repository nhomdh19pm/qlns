<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NghiViec extends Model
{
    use HasFactory;

    protected $table = 'nghiviec';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
