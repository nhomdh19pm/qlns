@extends('layouts.app')
@section('content-header')
<h1>
        Dân tộc
        <small>Quản lý dân tộc </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Dân tộc</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Dân Tộc</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('dantoc.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Bằng ngoại ngữ</th>
                        <th >Sửa</th>
                        <th >Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dantoc as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tendt }}</td>
                            <td ><a href="{{ route('dantoc.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i></a></td>
                            <td ><a href="{{ route('dantoc.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td>
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