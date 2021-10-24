@extends('layouts.app')
@section('content-header')
<h1>
      Bảng ứng lương
        <small>Quản lý ứng lương </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Ứng lương</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Ứng lương</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('ungluong.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Họ và tên</th>
                <th >Số tiền</th>
                <th >Lý do</th>
                <th >Tháng</th>
                <th >Năm</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($ungluong as $value)
                <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>{{ $value->sotien }}</td>
                            <td>{{ $value->lydo }}</td>
                            <td>{{ $value->thang }}</td>
                            <td>{{ $value->nam }}</td>
                            <td ><a href="{{ route('ungluong.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->nhanvien }}')"><i class="fa fa-edit"></i></a></td>
                            <td ><a href="{{ route('ungluong.sua',['id' => $value->id]) }}"><i class="fa fa-trash"></i></a></td>
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