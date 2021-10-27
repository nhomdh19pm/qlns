@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý phòng ban</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Phòng ban</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('phongban.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Phòng Ban</th>
                        <th ></th>
                        <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($phongban as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenpb }}</td>
<<<<<<< HEAD
                            <td class="text-center"width="10%"><a class="btn btn-outline-primary"href="{{ route('phongban.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tenpb }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center"width="10%"><a class="btn btn-outline-danger" href="{{ route('phongban.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
=======
                            <td class="text-center"><a class="btn btn-outline-primary"href="{{ route('phongban.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->tenpb }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="{{ route('phongban.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
>>>>>>> 241c96571ade3902ea622a65df21636808f71c1f
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