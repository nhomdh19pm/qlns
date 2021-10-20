<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamCong extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'chamcong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }
}
