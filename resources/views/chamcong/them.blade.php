@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Thêm Nghỉ việc</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Nghỉ việc</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">

            <form action="{{ route('chamcong.them') }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên Nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($nhanvien as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('chamcong')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="thang">Tháng</label>
                    <input type="text" class="form-control @error('thang') is-invalid @enderror"  id="thang"
                        name="thang" required />
                </div>
                
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="songaycong">Số ngày công</label>
                    <input type="text" class="form-control @error('songaycong') is-invalid @enderror"  id="songaycong"
                        name="songaycong" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="nam">Năm</label>
                    <input type="text" class="form-control @error('nam') is-invalid @enderror"  id="nam"
                        name="nam" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Thêm vào CSDL</button>
        </form>
        </div>
    </div>
@endsection
