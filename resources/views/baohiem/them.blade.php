@extends('layouts.admin')
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
            <form action="{{ route('baohiem.them') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($nhanvien as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="loaibaohiem_id">Loại bảo hiểm</label>
                    <select name="loaibaohiem_id" id="loaibaohiem_id" class="form-control @error('loaibaohiem_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($loaibaohiem as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenbh }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-2">
                <label class="form-label" for="maso">Mã số</label>
                    <input type="text" class="form-control @error('maso') is-invalid @enderror"  id="maso"
                        name="maso" required />
                </div>

                <div class="mb-2">
                <label class="form-label" for="noicap">Nơi cấp</label>
                    <input type="text" class="form-control @error('noicap') is-invalid @enderror"  id="noicap"
                        name="noicap" required />
                </div>

                <div class="mb-2" style="max-width:250px">
                <label class="form-label" for="ngaycap">Ngày cấp</label>
                    <input type="date" class="form-control @error('ngaycap') is-invalid @enderror"  id="ngaycap"
                        name="ngaycap" required />
                </div>
                
                
                <div class="mb-2" style="max-width:250px">
                <label class="form-label" for="ngayhethan">Ngày hết hạn</label>
                    <input type="date" class="form-control @error('ngayhethan') is-invalid @enderror"  id="ngayhethan"
                        name="ngayhethan" required />

                </div>

                <div class="mb-2">
                <label class="form-label" for="mucdong">Mức đóng</label>
                    <input type="text" class="form-control @error('mucdong') is-invalid @enderror"  id="mucdong"
                        name="mucdong" required />
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
