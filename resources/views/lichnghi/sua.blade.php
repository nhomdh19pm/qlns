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
    <li class="treeview ">
        <a href="#"><i class="fas fa-hospitals"></i> <span>Bảo Hiểm</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class=""><a href="{{ route('baohiem') }}"><i class="far fa-id-card"></i> <span>Bảo hiểm</span></a></li>
        <li class=""><a href="{{ route('loaibaohiem') }}"><i class="far fa-credit-card"></i> <span>Loại bảo hiểm</span></a></li>
        </ul>
    </li>
    <li class=""><a href="{{ route('thuongphat') }}"><i class="fa fa-gift-card"></i> <span>Thưởng phạt</span></a></li>
    <li class=""><a href="{{ route('hopdong') }}"><i class="fas fa-file-signature"></i> <span>Hợp đồng</span></a></li>
    <li class=""><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
    <li class=""><a href="{{ route('ungluong') }}"><i class="fad fa-money-check-edit-alt"></i> <span>Ứng lương</span></a></li>
    <li class=""><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
    <li class="active"><a href="{{ route('lichnghi') }}"><i class="fal fa-toggle-off"></i> <span>Lịch Nghỉ</span></a></li>
    <li><a href="{{ route('chamcong') }}"><i class="fad fa-calendar-alt"></i> <span>Chấm Công</span></a></li>
@endsection
@section('content-header')
<h1>
      <strong>Sửa Lịch nghỉ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Lịch nghỉ</li>
      </ol>
@endsection
@section('content')
<div class="card">
 <div class="card-body">
 <form action="{{ route('lichnghi.sua', ['id' => $lichnghi->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
      <label class="form-label" for="tenln">Tên lịch nghỉ</label>
      <input type="text" class="form-control" id="tenln" name="tenln" value="{{ $lichnghi->tenln }}" required />
 </div>
 <div class="mb-2" style="width:250px">
      <label class="form-label" for="ngaybh">Ngày bắt đầu</label>
      <input type="date" class="form-control" id="ngaybd" name="ngaybd" value="{{ $lichnghi->ngaybd }}" required />
 </div>
 <div class="mb-2" style="width:250px">
      <label class="form-label" for="ngaykt">Ngày kết thúc</label>
 <input type="date" class="form-control" id="ngaykt" name="ngaykt" value="{{ $lichnghi->ngaykt }}" required />
 </div>
 <div class="mb-2">
      <label class="form-label" for="huongluong">Loại</label>

      <select class="form-control" id="huongluong" name="huongluong">
      <option value="0" {{ $lichnghi->huongluong == 0 ? 'selected' : '' }}>Có</option> 
      <option value="1" {{ $lichnghi->huongluong == 1 ? 'selected' : '' }}>Không</option>              
      </select>
</div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
        </form>
      </div>
 </div>
@endsection