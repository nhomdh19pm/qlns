@extends('layouts.app')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Phòng ban</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('tongiao.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                        <th >#</th>
                        <th >Tên Tôn Giáo</th>
                        <th >Xóa</th>
                        <th >Sửa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tongiao as $value)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tentg }}</td>
                            <td ><a href="{{ route('tongiao.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->loaiphim }}')"><i class="fa fa-trash"></i></a></td>
                            <td ><a href="{{ route('tongiao.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td>
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