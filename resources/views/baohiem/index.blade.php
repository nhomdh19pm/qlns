@extends('layouts.app')
@section('active')
    <li  class=""><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-info-circle"></i> <span>Thông Tin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class=""><a href="{{ route('phongban') }}"><i class="fa fa-tasks-alt"></i> <span>Phòng Ban</span></a></li>        
        <li class=""><a href="{{ route('tongiao') }}"><i class="fa fa-star-of-david"></i> <span>Tôn Giáo</span></a></li>
        <li class=""><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
        <li class=""><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
        <li class=""><a href="{{ route('ngoaingu') }}"><i class="fa fa-globe-asia"></i> <span>Ngoại Ngữ</span></a></li>
        <li class=""><a href="{{ route('dantoc') }}"><i class="fa fa-flag-usa"></i> <span>Dân Tộc</span></a></li>
        </ul>
    </li>
    <li class="treeview active">
        <a href="#"><i class="fas fa-hospitals"></i> <span>Bảo Hiểm</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class="active"><a href="{{ route('baohiem') }}"><i class="far fa-id-card"></i> <span>Bảo hiểm</span></a></li>
        <li class=""><a href="{{ route('loaibaohiem') }}"><i class="far fa-credit-card"></i> <span>Loại bảo hiểm</span></a></li>
        </ul>
    </li>
    <li class=""><a href="{{ route('thuongphat') }}"><i class="fa fa-gift-card"></i> <span>Thưởng phạt</span></a></li>
    <li class=""><a href="{{ route('hopdong') }}"><i class="fas fa-file-signature"></i> <span>Hợp đồng</span></a></li>
    <li class=""><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
    <li class=""><a href="{{ route('ungluong') }}"><i class="fad fa-money-check-edit-alt"></i> <span>Ứng lương</span></a></li>
    <li class=""><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
    <li class=""><a href="{{ route('lichnghi') }}"><i class="fal fa-toggle-off"></i> <span>Lịch Nghỉ</span></a></li>
    <li class=""><a href="{{ route('nghiviec') }}"><i class="fal fa-power-off"></i> <span>Nghỉ Việc</span></a></li>
@endsection
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
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr class="text-center">
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