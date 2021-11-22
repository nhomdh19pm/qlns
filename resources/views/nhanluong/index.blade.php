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
          <li class=""><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
        </ul>
    </li>
    <li class="treeview active">
        <a href="#"><i class="fas fa-hospitals"></i> <span>Lương và các khoản</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="{{ route('ungluong') }}"><i class="fad fa-money-check-edit-alt"></i> <span>Ứng lương</span></a></li>
          <li class=""><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
          <li ><a href="{{ route('chamcong') }}"><i class="fad fa-calendar-alt"></i> <span>Chấm Công</span></a></li>
          <li class="active"><a href="{{ route('nhanluong') }}"><i class="fad fa-cash-register"></i> <span>Nhận Lương</span></a></li>
          <li class=""><a href="{{ route('thuongphat') }}"><i class="fa fa-gift-card"></i> <span>Thưởng phạt</span></a></li>
        </ul>
    </li>
    <li class=""><a href="{{ route('hopdong') }}"><i class="fas fa-file-signature"></i> <span>Hợp đồng</span></a></li>
    <li class=""><a href="{{ route('user') }}"><i class="fas fa-user"></i> <span>Tài khoản</span></a></li>
@endsection
@section('content-header')
<h1>
<strong>Quản lý Nhận lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas ">Trang Chủ</i>
        <li class="fas active">Nhận Lương</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('nhanluong.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr class="align-middle">
                  <th >#</th>
                  <th >Họ và tên</th>
                  <th >Mức lương</th>
                  <th >Hệ số lương</th>
                  <th >phụ cấp</th>
                  <th >Số ngày công</th>
                  <th >Thưởng</th>
                  <th >Phạt</th>
                  <th >Tạm ứng</th>
                  <th >Khẩu trừ</th>
                  <th >Tháng</th>
                  <th >Năm</th>
                  <th ></th>
                  <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nhanluong as $value)
                <tr class="hung-nguyen">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->hovaten }}</td>
                            <td>{{ number_format($value->luongcb) }}</td>
                            <td>{{ $value->hesoluong }}</td>
                            <td>{{ $value->phucap }}</td>                      
                            <td>{{ $value->songaycong }}</td>                                         
                            <td>{{ $value->thuong }}</td>                      
                            <td>{{ $value->phat }}</td>                      
                            <td>{{ $value->tamung }}</td>                      
                            <td>{{ $value->khautru }}</td>                      
                            <td>{{ $value->thang }}</td>                      
                            <td>{{ $value->nam }}</td>                      
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="javascript:eventXoa('{{ route('nhanvien.xoa',['id' => $value->id]) }}', '{{ $value->hovaten }}');"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('nhanvien.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
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