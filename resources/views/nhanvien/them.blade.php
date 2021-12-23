@extends('layouts.admin')

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
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
        <form action="{{ route('nhanvien.them') }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="mucluong_id">Mức lương</label>
                    <select name="mucluong_id" id="mucluong_id" class="form-control @error('mucluong_id') is-invalid @enderror"
                        required>
                        <option  value="">--Chọn--</option>
                        @foreach ($mucluong as $value)
                            <option value="{{ $value->id }}">
                               {{  number_format($value->luongcb) }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
              <!-- /.form-group -->
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
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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

              <!-- /.form-group -->
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
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="hovaten">Tên Nhân viên</label>
                    <input type="text" class="form-control @error('hovaten') is-invalid @enderror"  id="hovaten"
                        name="hovaten" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
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
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="gioitinh">Giới tính</label>
                <select class="form-control" id="gioitinh" name="gioitinh">
                    <option value="0">Nam</option>              
                    <option value="1">Nũ</option>
                </select>
                    @error('hopdong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            
            <div class="col-md-6">
            <div   class="mb-2">
                <label class="form-label" for="ngaysinh">Ngày sinh</label>
                    <input type="date" class="form-control @error('ngaysinh') is-invalid @enderror"  id="ngaysinh"
                        name="ngaysinh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div   class="mb-2">
                <label class="form-label" for="ngaynghilam">Ngày nghỉ làm</label>
                    <input type="date" class="form-control @error('ngaynghilam') is-invalid @enderror"  id="ngaynghilam"
                        name="ngaynghilam" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="cmnd">Số CMND</label>
                    <input type="text" class="form-control @error('cmnd') is-invalid @enderror"  id="cmnd"
                        name="cmnd" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="sdt">Số điện thoại</label>
                    <input type="text" class="form-control @error('sdt') is-invalid @enderror"  id="sdt"
                        name="sdt" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="diachi">Đia chỉ</label>
                    <input type="text" class="form-control @error('diachi') is-invalid @enderror"  id="diachi"
                        name="diachi" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="quequan">Quê quán</label>
                    <input type="text" class="form-control @error('quequan') is-invalid @enderror"  id="quequan"
                        name="quequan" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="trangthai">Tình trạng</label>
                <select class="form-control" id="trangthai" name="trangthai">
                    <option value="0">Đang làm việc</option>              
                    <option value="1">Nghỉ việc</option>
                </select>
                    @error('hopdong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="hesoluong">Hệ sô lương</label>
                    <input type="text" class="form-control @error('hesoluong') is-invalid @enderror"  id="hesoluong"
                        name="hesoluong" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="tenbh">Tên bảo hiểm</label>
                    <input type="text" class="form-control @error('tenbh') is-invalid @enderror"  id="tenbh"
                        name="tenbh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="ngaycap">Ngày cấp</label>
                    <input type="date" class="form-control @error('ngaycap') is-invalid @enderror"  id="ngaycap"
                        name="ngaycap" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->



            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="mabh">Mã bảo hiểm</label>
                    <input type="text" class="form-control @error('mabh') is-invalid @enderror"  id="mabh"
                        name="mabh" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div   class="mb-2">
                <label class="form-label" for="ngayhethan">Ngày hết hạn</label>
                    <input type="date" class="form-control @error('ngayhethan') is-invalid @enderror"  id="datepicker"
                        name="ngayhethan" required /> 
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
 
              <!-- /.form-group -->
                <div class="mb-2">
                <label class="form-label" for="mucdong">Mức đóng</label>
                    <input type="text" class="form-control @error('mucdong') is-invalid @enderror"  id="mucdong"
                        name="mucdong" required />
                    @error('nhanvien')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="photo_path">Hình ảnh</label>
                    <input type="file" class=" @error('photo_path') is-invalid @enderror" id="photo_path"
                        name="photo_path" value="{{ old('photo_path') }}" />
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
