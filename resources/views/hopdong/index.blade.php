@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Quản lý Hợp đồng</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Hợp đồng</li>
      </ol>
@endsection
@section('content')
<div class="row">
  <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('hopdong.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped text-center">
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
                <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>
                                {{ ($value->loaihopdong == 1) ? 'Có hạn' : 'Không xác định thời hạn'; }}
                            </td>
                            <td>{{ $value->ngaybd }}</td>
                            <td>{{ $value->ngaykt }}</td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="{{ route('hopdong.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('hopdong.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
</div>        
@endsection