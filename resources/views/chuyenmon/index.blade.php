@extends('layouts.app')
@section('active')
      <li><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
      <li><a href="{{ route('phongban') }}"><i class="fa fa-users"></i> <span>Phòng Ban</span></a></li>
      <li><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
      <li><a href="{{ route('tongiao') }}"><i class="fa fa-laptop-house"></i> <span>Tôn Giáo</span></a></li>
      <li  class="active"><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
      <li><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
      <li><a href="{{ route('ngoaingu') }}"><i class="fa fa-laptop-house"></i> <span>Ngoại Ngữ</span></a></li>
      <li><a href="{{ route('dantoc') }}"><i class="fa fa-laptop-house"></i> <span>Dân Tộc</span></a></li>
      <li><a href="{{ route('thuongphat') }}"><i class="fa fa-laptop-house"></i> <span>Thưởng phạt</span></a></li>
      <li><a href="{{ route('hopdong') }}"><i class="fa fa-laptop-house"></i> <span>Hợp đồng</span></a></li>
      <li><a href="{{ route('ungluong') }}"><i class="fa fa-money-check-alt"></i> <span>Ứng lương</span></a></li>
      <li><a href="{{ route('loaibaohiem') }}"><i class="fa fa-money-check-alt"></i> <span>Loại bảo hiểm</span></a></li>
      <li><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
      <li><a href="{{ route('lichnghi') }}"><i class="fa fa-money-check-alt"></i> <span>Lịch Nghỉ</span></a></li>
@endsection
@section('content-header')
<h1>
      <strong>Quản lý Chuyên môn</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Chuyên môn</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('chuyenmon.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Chuyên Môn</th>
                        <th ></th>
                        <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($chuyenmon as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tencm }}</td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="{{ route('chuyenmon.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tencv }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('chuyenmon.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
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