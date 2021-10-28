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
      <li><a href="{{ route('lichnghi') }}"><i class="fa fa-money-check-alt"></i> <span>Lịch Nghỉ</span></a></li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ký đầu thư lê') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Trang CHỦ') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
