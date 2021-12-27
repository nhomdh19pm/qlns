<?php

namespace App\Exports;

use App\Models\NhanVien;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class NhanVienExport implements     FromCollection,
                                    WithHeadings,
                                    WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'mucluong_id',
            'bangcap_id',
            'chuyenmon_id',
            'ngoaingu_id',
            'dantoc_id',
            'tongiao_id',
            'hovaten',
            'gioitinh',
            'ngaysinh',
            'cmnd',
            'sdt',
            'diachi',
            'quequan',
            'trangthai',
            'ngaynghilam',
            'hesoluong',
            'tenbh',
            'mabh',
            'mucdong',
            'ngaycap',
            'ngayhethan',
            'photo_path',
        ];
    }

    public function map($row): array
    {
        return [
            $row->mucluong_id,
            $row->bangcap_id,
            $row->chuyenmon_id,
            $row->ngoaingu_id,
            $row->tongiao_id,
            $row->tongiao_id,
            $row->hovaten,
            $row->gioitinh,
            $row->ngaysinh,
            $row->cmnd,
            $row->sdt,
            $row->diachi,
            $row->quequan,
            $row->trangthai,
            $row->ngaynghilam,
            $row->hesoluong,
            $row->tenbh,
            $row->mabh,
            $row->mucdong,
            $row->ngaycap,
            $row->ngayhethan,
            $row->photo_path,
        ];
    }


    public function collection()
    {
        return NhanVien::all();
    }
}
