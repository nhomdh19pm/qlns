@extends('layouts.app')
@section('active')
    <li  class="active"><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-info-circle"></i> <span>Thông Tin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('phongban') }}"><i class="fa fa-tasks-alt"></i> <span>Phòng Ban</span></a></li>
        
        <li><a href="{{ route('tongiao') }}"><i class="fa fa-star-of-david"></i> <span>Tôn Giáo</span></a></li>
        <li><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
        <li><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
        <li><a href="{{ route('ngoaingu') }}"><i class="fa fa-globe-asia"></i> <span>Ngoại Ngữ</span></a></li>
        <li><a href="{{ route('dantoc') }}"><i class="fa fa-flag-usa"></i> <span>Dân Tộc</span></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fas fa-hospitals"></i> <span>Bảo Hiểm</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('baohiem') }}"><i class="far fa-id-card"></i> <span>Bảo hiểm</span></a></li>
        <li><a href="{{ route('loaibaohiem') }}"><i class="far fa-credit-card"></i> <span>Loại bảo hiểm</span></a></li>
        </ul>
    </li>
    <li><a href="{{ route('thuongphat') }}"><i class="fa fa-gift-card"></i> <span>Thưởng phạt</span></a></li>
    <li><a href="{{ route('hopdong') }}"><i class="fas fa-file-signature"></i> <span>Hợp đồng</span></a></li>
    <li><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
    <li><a href="{{ route('ungluong') }}"><i class="fad fa-money-check-edit-alt"></i> <span>Ứng lương</span></a></li>
    <li><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
    <li><a href="{{ route('lichnghi') }}"><i class="fal fa-toggle-off"></i> <span>Lịch Nghỉ</span></a></li>
    <li><a href="{{ route('nghiviec') }}"><i class="fal fa-power-off"></i> <span>Nghỉ Việc</span></a></li>
    <li><a href="{{ route('chamcong') }}"><i class="fad fa-calendar-alt"></i> <span>Chấm Công</span></a></li>

@endsection
@section('content-header')
<h1>
<strong>Quản lý nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-user-shield">Trang Chủ</i>
        <li class="fas active">Nhân viên</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('nhanvien.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr class="align-middle">
                  <th >#</th>
                  <th >Họ và tên</th>
                  <th >Mức lương</th>
                  <th >Bằng cấp</th>
                  <th >Chuyên môn</th>
                  <th >Giới tính</th>
                  <th >Trạng thái</th>
                  <th class="text-center" width="25%" >Ảnh</th>
                  <th ></th>
                  <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nhanvien as $value)
                <tr class="hung-nguyen">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->hovaten }}</td>
                            <td>{{ number_format($value->mucluong->luongcb) }}</td>
                            <td>{{ $value->bangcap->tenbc }}</td>
                            <td>{{ $value->chuyenmon->tencm }}</td>
                            <td>
                                {{ ($value->gioitinh == 1) ? 'Nữ' : 'Nam'; }}
                            </td>
                            <td>
                                {{ ($value->trangthai == 1) ? 'Đang làm việc' : 'Nghỉ việc'; }}
                            </td>
                            <td class="text-center">
                              <img width="20%" height="20%"src="../storage/images/{{ $value->photo_path }}" >
                            </td>                          
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