@extends('layouts.app')
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
            <form action="{{ route('hopdong.them') }}" method="post">
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
                        @error('hopdong')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                <label class="form-label" for="loaihopdong">Loại hợp đồng</label>
                    <input type="text" class="form-control @error('loaihopdong') is-invalid @enderror"  id="loaihopdong"
                        name="loaihopdong" required />
                    @error('hopdong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="ngaybd">Ngày bắt đầu hợp đồng</label>
                    <input type="date" class="form-control @error('ngaybd') is-invalid @enderror"  id="ngaybd"
                        name="ngaybd" required />
                    @error('hopdong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                
                
                <div class="mb-2">
                <label class="form-label" for="ngaykt">Ngày kết thúc hợp đồng</label>
                    <input type="date" class="form-control @error('ngaykt') is-invalid @enderror"  id="ngaykt"
                        name="ngaykt" required />
                    @error('hopdong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
