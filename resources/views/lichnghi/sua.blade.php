@extends('layouts.app')
@section('active')
      <li><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
      <li><a href="{{ route('phongban') }}"><i class="fa fa-users"></i> <span>Phòng Ban</span></a></li>
      <li><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>     
      <li><a href="{{ route('tongiao') }}"><i class="fa fa-laptop-house"></i> <span>Tôn Giáo</span></a></li>
      <li><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
      <li><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
      <li><a href="{{ route('ngoaingu') }}"><i class="fa fa-laptop-house"></i> <span>Ngoại Ngữ</span></a></li>
      <li><a href="{{ route('dantoc') }}"><i class="fa fa-laptop-house"></i> <span>Dân Tộc</span></a></li>
      <li><a href="{{ route('thuongphat') }}"><i class="fa fa-laptop-house"></i> <span>Thưởng phạt</span></a></li>
      <li><a href="{{ route('hopdong') }}"><i class="fa fa-laptop-house"></i> <span>Hợp đồng</span></a></li>
      <li><a href="{{ route('ungluong') }}"><i class="fa fa-money-check-alt"></i> <span>Ứng lương</span></a></li>
      <li><a href="{{ route('loaibaohiem') }}"><i class="fa fa-money-check-alt"></i> <span>Loại bảo hiểm</span></a></li>
      <li><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
      <li class="active"><a href="{{ route('lichnghi') }}"><i class="fa fa-money-check-alt"></i> <span>Lịch Nghỉ</span></a></li>
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
 <div class="mb-2">
      <label class="form-label" for="ngaybh">Ngày bắt đầu</label>
      <input type="date" class="form-control" id="ngaybd" name="ngaybd" value="{{ $lichnghi->ngaybd }}" required />
 </div>
      <div class="mb-2">
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