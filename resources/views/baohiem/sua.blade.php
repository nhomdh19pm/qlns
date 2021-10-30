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
      <strong>Thêm Hợp đồng</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Mức lương</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
                <form action="{{ route('hopdong.sua', ['id' => $hopdong->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($hopdong->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('hopdong')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="loaihopdong">Loại hợp đồng</label>

                    <select class="form-control" id="loaihopdong" name="loaihopdong">
                        <option value="0" {{ $hopdong->loaihopdong == 0 ? 'selected' : '' }}>thử việc</option> 
                        <option value="1" {{ $hopdong->loaihopdong == 1 ? 'selected' : '' }}>Chính thức</option>              
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="ngaybd">Ngày bắt đầu hợp đồng</label>
                        <input type="date" class="form-control" id="ngaybd" name="ngaybd" value="{{ $hopdong->ngaybd }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="ngaykt">Ngày kết thúc hợp đồng</label>
                        <input type="date" class="form-control" id="ngaykt" name="ngaykt" value="{{ $hopdong->ngaykt }}" required />
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
