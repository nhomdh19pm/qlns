<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiBaoHiem extends Model
{
    use HasFactory;

    protected $table = 'loaibaohiem';

    public function baohiem()
    {
        return $this->hasMany(BaoHiem::class);
    }
}
