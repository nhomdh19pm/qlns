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
        return $this->hasMany(ChamCong::class, 'id', 'nhanvien_id');
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

    // public static function getname()
    // {
    //     return DB::table('nhanvien')
    //     ->select('nhanvien.id','nhanvien.hesoluong','mucluong.luongcb','mucluong.phucap','thuongphat.sotien','ungluong.sotien','baohiem.mucdong')
    //     ->join('phongban','mucluong.phongban_id','=','phongban.id')
    //     ->join('chucvu','mucluong.chucvu_id','=','chucvu.id')
    //     ->orderBy('phongban.id')
    //     ->get();
        
    // }

    // public static function dfd()
    // {
    //     return DB::table('mucluong')
    //     ->select('mucluong.id','phongban.tenpb','chucvu.tencv')
    //     ->join('phongban','mucluong.phongban_id','=','phongban.id')
    //     ->join('chucvu','mucluong.chucvu_id','=','chucvu.id')
    //     ->orderBy('phongban.id')
    //     ->get();
        
    // }

    // $post = Mjblog::whereYears('created_at', '=', $year)
    //               ->whereMonth('created_at', '=', $month)
    //               ->get();
    public static function GetNgayCong($nhanvien_id,$month,$year)
    {
      return (new chamcong())->where('nhanvien_id', $nhanvien_id)->whereYears('created_at', '=', $year)->whereMonth('created_at', '=', $month)->count();
                        
    }
    
}
