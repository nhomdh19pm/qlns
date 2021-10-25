@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý loại bảo hiểm</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Bảo hiểm</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('loaibaohiem.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Loại bảo hiểm</th>
                        <th ></th>
                        <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($loaibaohiem as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenbh }}</td>
                            <td class="text-center"><a href="{{ route('loaibaohiem.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i></a></td>
                            <td class="text-center"><a href="{{ route('loaibaohiem.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td>
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