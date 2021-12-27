@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Quản lý Bảo hiểm</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Bảo hiểm</li>
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
            <p><a href="{{ route('baohiem.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr class="">
                <th >#</th>
                <th >Họ và tên</th>
                <th >Loại bảo hiểm</th>
                <th >Mã Số</th>
                <th >Nơi Cấp</th>
                <th >Ngày Cấp</th>
                <th >Ngày Hêt Hạn</th>
                <th >Mức Đóng</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($baohiem as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nhanvien->hovaten }}</td>
                    <td>{{ $value->loaibaohiem->tenbh }}</td>
                    <td>{{ $value->maso }}</td>
                    <td>{{ $value->noicap }}</td>
                    <td>{{ $value->ngaycap }}</td>
                    <td>{{ $value->ngayhethan }}</td>
                    <td>{{ $value->mucdong }}</td>
                    <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="javascript:eventXoa('{{ route('baohiem.xoa',['id' => $value->id]) }}', '{{ $value->nhanvien->hovaten }}');"><i class="fa fa-trash"></i> Xóa</a></td>
                    <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('baohiem.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<script>
function eventXoa(url, ten)
{
  let check  = confirm('Bạn có muốn xóa "' + ten + '"');

  if (check)
    window.location.href= url;
}
</script>        
@endsection