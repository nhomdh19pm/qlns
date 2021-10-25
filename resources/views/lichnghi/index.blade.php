@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý Lịch nghỉ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Lịch nghỉ</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('lichnghi.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Tên lịch nghỉ</th>
                <th >Ngày bắt đầu</th>
                <th >Ngày kết thúc</th>
                <th >Hưởng lương</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($lichnghi as $value)
                <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenln }}</td>
                            <td>{{ $value->ngaybd }}</td>
                            <td>{{ $value->ngaykt }}</td>
                            <td>{{ $value->huongluong }}</td>
                            <td ><a href="{{ route('lichnghi.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i></a></td>
                            <td ><a href="{{ route('lichnghi.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td>
                            
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