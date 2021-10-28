@extends('layouts.app')
@section('active')
      <li class="active"><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
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
@section('content-header')
<h1>
      <strong>Thêm Nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Nhân viên</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('nhanvien.them') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="mucluong_id">Mức lương</label>
                    <select name="mucluong_id" id="mucluong_id" class="form-control @error('mucluong_id') is-invalid @enderror"
                        required>
                        <option  value="">--Chọn--</option>
                        @foreach ($mucluong as $value)
                            <option value="{{ $value->id }}">
                               {{  number_format($value->luongcb) }}đ
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>





                <div class="mb-2">
                    <label class="form-label" for="bangcap_id">Loại bằng cấp</label>
                    <select name="bangcap_id" id="bangcap_id" class="form-control @error('bangcap_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($bangcap as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenbc }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>






                <div class="mb-2">
                    <label class="form-label" for="chuyenmon_id">Tên chuyên môn</label>
                    <select name="chuyenmon_id" id="chuyenmon_id" class="form-control @error('chuyenmon_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($chuyenmon as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tencm }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>



                

                <div class="mb-2">
                    <label class="form-label" for="ngoaingu_id">Bằng ngoại ngữ</label>
                    <select name="ngoaingu_id" id="ngoaingu_id" class="form-control @error('ngoaingu_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($ngoaingu as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenng }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>





                <div class="mb-2">
                    <label class="form-label" for="dantoc_id">Thuộc dân tộc</label>
                    <select name="dantoc_id" id="dantoc_id" class="form-control @error('dantoc_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($dantoc as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tendt }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>





                <div class="mb-2">
                    <label class="form-label" for="tongiao_id">Thuộc tôn giáo</label>
                    <select name="tongiao_id" id="tongiao_id" class="form-control @error('tongiao_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($tongiao as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tentg }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                <label class="form-label" for="hovaten">Tên Nhân viên</label>
                    <input type="text" class="form-control @error('hovaten') is-invalid @enderror"  id="hovaten"
                        name="hovaten" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="luongcb">Giới tính</label>
                    <input type="text" class="form-control @error('gioitinh') is-invalid @enderror"  id="gioitinh"
                        name="gioitinh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="ngaysinh">Ngày sinh</label>
                    <input type="date" class="form-control @error('ngaysinh') is-invalid @enderror"  id="ngaysinh"
                        name="ngaysinh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="cmnd">Số CMND</label>
                    <input type="text" class="form-control @error('cmnd') is-invalid @enderror"  id="cmnd"
                        name="cmnd" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="sdt">Số điện thoại</label>
                    <input type="text" class="form-control @error('sdt') is-invalid @enderror"  id="sdt"
                        name="sdt" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>


                <div class="mb-2">
                <label class="form-label" for="diachi">Đia chỉ</label>
                    <input type="text" class="form-control @error('diachi') is-invalid @enderror"  id="diachi"
                        name="diachi" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>



                <div class="mb-2">
                <label class="form-label" for="quequan">Quê quán</label>
                    <input type="text" class="form-control @error('quequan') is-invalid @enderror"  id="quequan"
                        name="quequan" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>


                <div class="mb-2">
                <label class="form-label" for="trangthai">Trạng thái</label>
                    <input type="text" class="form-control @error('ngaysinh') is-invalid @enderror"  id="ngaysinh"
                        name="ngaysinh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="ngaynghilam">Ngày nghỉ làm</label>
                    <input type="date" class="form-control @error('ngaynghilam') is-invalid @enderror"  id="ngaynghilam"
                        name="ngaynghilam" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="hesoluong">Hệ sô lương</label>
                    <input type="text" class="form-control @error('hesoluong') is-invalid @enderror"  id="hesoluong"
                        name="hesoluong" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
    

                <div class="mb-2">
                    <label class="form-label" for="photo_path">Hình ảnh Phim</label>
                    <input type="file" class=" @error('photo_path') is-invalid @enderror" id="photo_path"
                        name="photo_path" value="{{ old('photo_path') }}" />
                    @error('photo_path')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>



                
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection