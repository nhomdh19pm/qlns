@extends('layouts.admin')

@section('content-header')
<h1>
      <strong>Chi tiết Nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Nhân Viên</li>
      </ol>
@endsection
@section('content')
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
        <a href="{{ route('nhanluong.them', ['id' => $nhanvien->id]) }}" class="btn" > Nhận lương


        </a>
        <form action="{{ route('nhanvien.sua', ['id' => $nhanvien->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="mb-2">
                    <label class="form-label" for="hovaten">Họ và tên</label>
                        <input type="text" class="form-control" id="hovaten" name="hovaten" value="{{ $nhanvien->hovaten }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="mucluong_id">Lương cơ bản</label>
                    <select name="mucluong_id" id="mucluong_id" class="form-control @error('mucluong_id')  is-invalid @enderror" 
                        required>
                        @foreach ($mucluong as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->mucluong_id == $value->id) ? 'selected' : '' }}>
                            {{  number_format($value->luongcb) }} đ
                        </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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

              <!-- /.form-group -->
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

              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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
              <!-- /.form-group -->
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
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">

                <div class="mb-2">
                    <label class="form-label" for="chuyenmon_id">Tôn giáo</label>
                    <select name="chuyenmon_id" id="chuyenmon_id" class="form-control @error('chuyenmon_id')  is-invalid @enderror" 
                        required>
                        @foreach ($chuyenmon as $value)
                        <option value="{{ $value->id }}" {{ ($nhanvien->chuyenmon_id == $value->id) ? 'selected' : '' }}>
                            {{ $value->tencm }} 
                        </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="cmnd">Số chứng minh nhân dân</label>
                        <input type="text" class="form-control" id="cmnd" name="cmnd" value="{{ $nhanvien->cmnd }}" required />
                </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="sdt">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $nhanvien->sdt }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="diachi">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" value="{{ $nhanvien->diachi }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="quequan">Quê quán</label>
                        <input type="text" class="form-control" id="quequan" name="quequan" value="{{ $nhanvien->quequan }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="gioitinh">Giới tính</label>

                    <select class="form-control" id="gioitinh" name="gioitinh">
                        <option value="0" {{ $nhanvien->gioitinh == 0 ? 'selected' : '' }}>Nam</option> 
                        <option value="1" {{ $nhanvien->gioitinh == 1 ? 'selected' : '' }}>Nữ</option>              
                    </select>
                </div>
 
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="ngaynghilam">Ngày nghỉ làm</label>
                        <input type="date" class="form-control" id="ngaynghilam" name="ngaynghilam" value="{{ $nhanvien->ngaynghilam }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="hesoluong">Hệ số lương</label>
                        <input type="text" class="form-control" id="hesoluong" name="hesoluong" value="{{ $nhanvien->hesoluong }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="ngaysinh">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="{{ $nhanvien->ngaysinh }}" required />
                </div>

              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="trangthai">Trạng thái</label>

                    <select class="form-control" id="trangthai" name="trangthai">
                        <option value="0" {{ $nhanvien->trangthai == 0 ? 'selected' : '' }}>Nghỉ việc</option> 
                        <option value="1" {{ $nhanvien->trangthai == 1 ? 'selected' : '' }}>Đang làm việc</option>              
                    </select>
                </div>

              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="mabh">Mã bảo hiểm</label>
                        <input type="text" class="form-control" id="mabh" name="tenmabhbh" value="{{ $nhanvien->mabh }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="ngaycap">Ngày cấp</label>
                        <input type="date" class="form-control" id="ngaycap" name="ngaycap" value="{{ $nhanvien->ngaycap }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                  
                  <label class="form-label" for="tenbh">Tên bảo hiểm</label>
                      <input type="text" class="form-control" id="tenbh" name="tenbh" value="{{ $nhanvien->tenbh }}" required />
              </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="ngayhethan">Ngày hết hạn</label>
                        <input type="date" class="form-control" id="ngayhethan" name="ngayhethan" value="{{ $nhanvien->ngayhethan }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="mucdong">Mức đóng</label>
                        <input type="text" class="form-control" id="mucdong" name="mucdong" value="{{ $nhanvien->mucdong }}" required />
                </div>
              <!-- /.form-group -->
  
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label mb-2" for="photo_path">Hình ảnh Nhân viên</label>
                    @if (!empty($nhanvien->photo_path))
                        <img class="d-block rounded mb-2 rounded" style="border-radius: 10px;" src="http://127.0.0.1/qlns/storage/images/{{ $nhanvien->photo_path }}" width="100" />
                           
                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                    @endif
                    <input type="file" class=" @error('photo_path') is-invalid @enderror" id="photo_path"
                        name="photo_path" value="{{ $nhanvien->photo_path }}" />
                    @error('photo_path')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror 
                </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Thêm vào CSDL</button>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
@endsection
