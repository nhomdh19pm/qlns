<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
 
    protected $table = 'nhanvien';


    public function user()
    {
        return $this->hasOne(User::class, 'nhanvien_id', 'id');
    }

    public function chamcong()
    {
        return $this->hasMany(NhanVien::class, 'id', 'nhanvien_id');
    }

    public function hopdong()
    {
        return $this->hasMany(HopDong::class, 'id', 'nhanvien_id');
    }

    public function thuongphat()
    {
        return $this->hasMany(ThuongPhat::class, 'id', 'nhanvien_id');
    }

    public function ungluong()
    {
        return $this->hasMany(UngLuong::class, 'id', 'nhanvien_id');
    }

    public function nghiviec()
    {
        return $this->hasMany(NghiViec::class, 'id', 'nhanvien_id');
    }

    public function baohiem()
    {
        return $this->hasMany(BaoHiem::class, 'id', 'nhanvien_id');
    }

    public function khautru()
    {
        return $this->hasMany(KhauTru::class, 'id', 'nhanvien_id');
    }

    public function nhanluong()
    {
        return $this->hasMany(NhanLuong::class, 'id', 'nhanvien_id');
    }

    public function mucluong()
    {
        return $this->belongsTo(MucLuong::class, 'mucluong_id', 'id');
    }

    public function ngoaingu()
    {
        return $this->belongsTo(NgoaiNgu::class, 'ngoaingu_id', 'id');
    }

    public function chuyenmon()
    {
        return $this->belongsTo(ChuyenMon::class, 'chuyenmon_id', 'id');
    }

    public function bangcap()
    {
        return $this->belongsTo(BangCap::class, 'bangcap_id', 'id');
    }

    public function tongiao()
    {
        return $this->belongsTo(TonGiao::class, 'tongiao_id', 'id');
    }

    public function dantoc()
    {
        return $this->belongsTo(DanToc::class, 'dantoc_id', 'id');
    }

    
}
