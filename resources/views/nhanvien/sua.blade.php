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
                <form action="{{ route('nhanvien.sua', ['id' => $nhanvien->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="hovaten">Họ và tên</label>
                        <input type="text" class="form-control" id="hovaten" name="hovaten" value="{{ $nhanvien->hovaten }}" required />
                </div>


                <div class="mb-2">
                    <label class="form-label" for="mucluong_id">Lương cơ bản</label>
                    <select name="mucluong_id" id="mucluong_id" class="form-control @error('mucluong_id')  is-invalid @enderror" 
                        required>
                        @foreach ($mucluong as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->bangcap_id == $value->id) ? 'selected' : '' }}>
                            {{  number_format($value->luongcb) }} đ
                        </option>
                        @endforeach
                    </select>
                </div>

                
                <div class="mb-2">
                    <label class="form-label" for="bangcap_id">Bằng cấp</label>
                    <select name="bangcap_id" id="bangcap_id" class="form-control @error('bangcap_id')  is-invalid @enderror" 
                        required>
                        @foreach ($bangcap as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->bangcap_id == $value->id) ? 'selected' : '' }}>
                            {{  $value->tenbc }} 
                        </option>
                        @endforeach
                    </select>
                </div>

                
                <div class="mb-2">
                    <label class="form-label" for="chuyenmon_id">Chuyên môn</label>
                    <select name="chuyenmon_id" id="chuyenmon_id" class="form-control @error('chuyenmon_id')  is-invalid @enderror" 
                        required>
                        @foreach ($chuyenmon as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->chuyenmon_id == $value->id) ? 'selected' : '' }}>
                            {{  $value->tencm }} 
                        </option>
                        @endforeach
                    </select>
                </div>

                
                <div class="mb-2">
                    <label class="form-label" for="ngoaingu_id">Ngoại ngữ</label>
                    <select name="ngoaingu_id" id="ngoaingu_id" class="form-control @error('ngoaingu_id')  is-invalid @enderror" 
                        required>
                        @foreach ($ngoaingu as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->ngoaingu_id == $value->id) ? 'selected' : '' }}>
                            {{  $value->tenng }} 
                        </option>
                        @endforeach
                    </select>
                </div>

                
                <div class="mb-2">
                    <label class="form-label" for="dantoc_id">Dân tộc</label>
                    <select name="dantoc_id" id="dantoc_id" class="form-control @error('dantoc_id')  is-invalid @enderror" 
                        required>
                        @foreach ($dantoc as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->dantoc_id == $value->id) ? 'selected' : '' }}>
                            {{ $value->tendt }} 
                        </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-2">
                    <label class="form-label" for="tongiao_id">Tôn giáo</label>
                    <select name="tongiao_id" id="tongiao_id" class="form-control @error('tongiao_id')  is-invalid @enderror" 
                        required>
                        @foreach ($tongiao as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->tongiao_id == $value->id) ? 'selected' : '' }}>
                            {{ $value->tentg }} 
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-2">
                    <label class="form-label" for="gioitinh">Loại hợp đồng</label>

                    <select class="form-control" id="gioitinh" name="gioitinh">
                        <option value="0" {{ $nhanvien->gioitinh == 0 ? 'selected' : '' }}>Nam</option> 
                        <option value="1" {{ $nhanvien->gioitinh == 1 ? 'selected' : '' }}>Nữ</option>              
                    </select>
                </div>

                
                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaysinh">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="{{ $nhanvien->ngaysinh }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="cmnd">Số chứng minh nhân dân</label>
                        <input type="text" class="form-control" id="cmnd" name="cmnd" value="{{ $nhanvien->cmnd }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="sdt">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $nhanvien->sdt }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="diachi">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" value="{{ $nhanvien->diachi }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="quequan">Quê quán</label>
                        <input type="text" class="form-control" id="quequan" name="quequan" value="{{ $nhanvien->quequan }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="trangthai">Trạng thái</label>

                    <select class="form-control" id="trangthai" name="trangthai">
                        <option value="0" {{ $nhanvien->trangthai == 0 ? 'selected' : '' }}>Nghỉ việc</option> 
                        <option value="1" {{ $nhanvien->trangthai == 1 ? 'selected' : '' }}>Đang làm việc</option>              
                    </select>
                </div>

                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaynghilam">Ngày nghỉ làm</label>
                        <input type="date" class="form-control" id="ngaynghilam" name="ngaynghilam" value="{{ $nhanvien->ngaynghilam }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="hesoluong">Hệ số lương</label>
                        <input type="text" class="form-control" id="hesoluong" name="hesoluong" value="{{ $nhanvien->hesoluong }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="photo_path">Hệ số lương</label>
                        <input type="file" id="photo_path" name="photo_path" value="{{ $nhanvien->photo_path }}" required />
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
