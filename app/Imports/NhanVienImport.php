<?php

namespace App\Imports;

use App\Models\NhanVien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NhanVienImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NhanVien([
            'id' => $row['id'],
            'mucluong_id' => $row['mucluong_id'],
            'bangcap_id' => $row['bangcap_id'],
            'chuyenmon_id' => $row['chuyenmon_id'],
            'ngoaingu_id' => $row['ngoaingu_id'],
            'dantoc_id' => $row['dantoc_id'],
            'tongiao_id' => $row['tongiao_id'],
            'hovaten' => $row['hovaten'],
            'gioitinh' => $row['gioitinh'],
            'ngaysinh' => $row['ngaysinh'],
            'cmnd' => $row['cmnd'],
            'sdt' => $row['sdt'],
            'diachi' => $row['diachi'],
            'ngaynghilam' => $row['ngaynghilam'],
            'hesoluong' => $row['hesoluong'],
            'tenbh' => $row['tenbh'],
            'mabh' => $row['mabh'],
            'mucdong' => $row['mucdong'],
            'ngaycap' => $row['ngaycap'],
            'ngayhethan' => $row['ngayhethan'],
            'photo_path' => $row['photo_path'],
        ]);
    }
    
}
