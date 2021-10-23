@extends('layouts.app')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Thưởng phạt</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('thuongphat.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Họ và tên</th>
                <th >Loại phạt</th>
                <th >Số tiền</th>
                <th >Lý do</th>
                <th >Tháng</th>
                <th >Năm</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($thuongphat as $value)
                <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>{{ number_format($value->mucluong->luongcb) }}</td>
                            <td>{{ $value->ngoaingu->tenng }}</td>
                            <td>{{ $value->bangcap->tenbc }}</td>
                            <td>{{ $value->chuyenmon->tencm }}</td>
                            <td>{{ $value->dantoc->tendt }}</td>
                            <td>{{ $value->tongiao->tentg }}</td>
                            <td>{{ $value->ngaysinh }}</td>
                            <td ><a href="{{ route('nhanvien.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->nhanvien }}')"><i class="fa fa-edit"></i></a></td>
                            <td ><a href="{{ route('nhanvien.sua',['id' => $value->id]) }}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection