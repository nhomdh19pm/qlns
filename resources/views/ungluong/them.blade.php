@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Thêm Ứng lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Ứng lương</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
        <form action="{{ route('ungluong.them') }}" method="post">
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
                        @error('thuongphat')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="sotien">Số tiền Úng</label>
                    <input type="number" class="form-control @error('sotien') is-invalid @enderror"  id="sotien"
                        name="sotien" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="lydo">Lý do </label>
                    <input type="text" class="form-control @error('lydo') is-invalid @enderror"  id="lydo"
                        name="lydo" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="thang">Của tháng</label>
                    <input type="text" class="form-control @error('thang') is-invalid @enderror"  id="thang"
                        name="thang" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
            <div class="mb-2">
                <label class="form-label" for="nam">Của năm</label>
                    <input type="text" class="form-control @error('nam') is-invalid @enderror"  id="nam"
                        name="nam" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
            </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
            </div>
          </div>
          <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Thêm vào CSDL</button>
        </form>
        </div>
    </div>
@endsection
