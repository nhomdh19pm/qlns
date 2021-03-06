@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Quản lý Nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas ">Trang Chủ</i>
        <li class="fas active">Nhân viên</li>
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
                    <label class="form-label mb-2" for="photo_path">Hình ảnh Nhân viên</label>
                    @if (!empty($nhanvien->photo_path))
                        <img class="d-block rounded mb-2 rounded" style="border-radius: 10px;" src="http://127.0.0.1/qlns/storage/images/{{ $nhanvien->photo_path }}" width="100" />
                           
                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                    @endif
                    <input type="file" class="form-control @error('photo_path') is-invalid @enderror" id="photo_path"
                        name="photo_path" value="{{ $nhanvien->photo_path }}" />
                    @error('photo_path')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror 
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
