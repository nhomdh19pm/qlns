@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý thưởng phạt</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Thưởng phạt</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
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
                <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>
                                {{ ($value->loai == 1) ? 'Thưởng' : 'Phạt'; }}
                            </td>
                            <td>{{ number_format($value->sotien) }}</td>
                            <td>{{ $value->lydo }}</td>
                            <td>{{ $value->thang }}</td>
                            <td>{{ $value->nam }}</td>
                            <td class="text-center"><a href="{{ route('nhanvien.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->nhanvien }}')"><i class="fa fa-edit"></i></a></td>
                            <td class="text-center"><a href="{{ route('nhanvien.sua',['id' => $value->id]) }}"><i class="fa fa-trash"></i></a></td>
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