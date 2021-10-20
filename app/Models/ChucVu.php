<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    use HasFactory;

    protected $table = 'chucvu';

    public function mucluong()
    {
        return $this->hasMany(MucLuong::class);
    }
}
