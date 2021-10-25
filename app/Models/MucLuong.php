<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MucLuong extends Model
{
    use HasFactory;

    protected $table = 'mucluong';

    public function phongban()
    {
        return $this->belongsTo(PhongBan::class);
    }

    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class);
    }

}
