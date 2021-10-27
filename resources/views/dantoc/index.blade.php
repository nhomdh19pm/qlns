@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý Dân tộc</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Dân tộc</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('dantoc.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Dân tộc</th>
                        <th ></th>
                        <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dantoc as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tendt }}</td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="{{ route('dantoc.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('dantoc.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
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