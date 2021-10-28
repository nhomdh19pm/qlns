@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý Mức lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Mức lương</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('mucluong.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Phòng ban</th>
                <th >Chức vụ</th>
                <th >Lương cơ bản</th>
                <th >Phụ cấp</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($mucluong as $value)
                <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->phongban->tenpb }}</td>
                            <td>{{ $value->chucvu->tencv }}</td>
                            <td>{{ number_format($value->luongcb) }}</td>
                            <td>{{ $value->phucap }}</td>
                            <td class="text-center"><a class="btn btn-outline-primary"href="{{ route('mucluong.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center"><a class="btn btn-outline-danger" href="{{ route('mucluong.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
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