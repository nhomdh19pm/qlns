<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    use HasFactory;

    protected $table = 'phongban';

    public function mucluong()
    {
        return $this->hasMany(MucLuong::class, 'phongban_id', 'id');
    }
}
