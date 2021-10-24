@extends('layouts.app')
@section('content-header')
<h1>
        Hợp đồng
        <small>Quản lý hợp đồng </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Hợp đồng</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Hợp đồng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('hopdong.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Họ và tên</th>
                <th >Loại hợp đồng</th>
                <th >Ngày bắt đầu</th>
                <th >Ngày kết thúc</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($hopdong as $value)
                <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>{{ $value->loaihopdong }}</td>
                            <td>{{ $value->ngaybd }}</td>
                            <td>{{ $value->ngaykt }}</td>
                            <td ><a href="{{ route('hopdong.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->nhanvien }}')"><i class="fa fa-edit"></i></a></td>
                            <td ><a href="{{ route('hopdong.sua',['id' => $value->id]) }}"><i class="fa fa-trash"></i></a></td>
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