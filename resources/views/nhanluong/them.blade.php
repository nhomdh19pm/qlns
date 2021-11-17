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
    <li class=""><a href="{{ route('lichnghi') }}"><i class="fal fa-toggle-off"></i> <span>Lịch Nghỉ</span></a></li>
    <li class=""><a href="{{ route('nghiviec') }}"><i class="fal fa-power-off"></i> <span>Nghỉ Việc</span></a></li>
@endsection
@section('content-header')
<h1>
      <strong>Thêm Nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Nhân Viên</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('nhanluong.them') }}" method="post" >
            @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Mức lương</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id') is-invalid @enderror"
                        required>
                        <option  value="">--Chọn--</option>
                        @foreach ($nhanvien as $value)
                            <option value="{{ $value->id }}">
                               {{  $value->hovaten }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                <label class="form-label" for="luongcb">Lương cơ bản</label>
                    <input type="text" class="form-control @error('luongcb') is-invalid @enderror"  id="luongcb"
                        name="luongcb" required />
                    @error('luongcb')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="phucap">Phụ cấp</label>
                    <input value="{{ $phucap }}" type="text" class="form-control @error('phucap') is-invalid @enderror"  id="phucap"
                        name="phucap" required />
                    @error('phucap')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="hesoluong">Hệ số lương </label>
                    <input type="text" class="form-control @error('hesoluong') is-invalid @enderror"  id="hesoluong"
                        name="hesoluong" required />
                    @error('hesoluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="songaycong">Số ngày công</label>
                    <input value="{{ $ngaycong }}" type="text" class="form-control @error('songaycong') is-invalid @enderror"  id="songaycong"
                        name="songaycong" required />
                    @error('songaycong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="thuong">Thưởng</label>
                    <input value="{{ $thuong }}" type="text" class="form-control @error('thuong') is-invalid @enderror"  id="thuong"
                        name="thuong" required />
                    @error('thuong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="phat">Phạt</label>
                    <input value="{{ $phat }}" type="text" class="form-control @error('phat') is-invalid @enderror"  id="phat"
                        name="phat" required />
                    @error('phat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="tamung">Tạm ứng</label>
                    <input type="text" class="form-control @error('tamung') is-invalid @enderror"  id="tamung"
                        name="tamung" required />
                    @error('tamung')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="khautru">Khẩu trừ</label>
                    <input type="text" class="form-control @error('khautru') is-invalid @enderror"  id="khautru"
                        name="khautru" required />
                    @error('khautru')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="thang">Tháng</label>
                    <input type="text" class="form-control @error('thang') is-invalid @enderror"  id="thang"
                        name="thang" required />
                    @error('thang')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="nam">Năm</label>
                    <input type="text" class="form-control @error('nam') is-invalid @enderror"  id="nam"
                        name="nam" required />
                    @error('nam')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
