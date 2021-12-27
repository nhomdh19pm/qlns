@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Nghỉ việc</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Thưởng phạt</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">




            <form action="{{ route('chamcong.sua', ['id' => $chamcong->id]) }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($chamcong->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="mb-2">
              <div class="mb-2" >
                    <label class="form-label" for="thang">Tháng</label>
                        <input type="text" class="form-control" id="thang" name="thang" value="{{ $chamcong->thang }}" required />
                </div>
                
            </div>
            <!-- /.col -->
            <div class="col-md-6">

              <!-- /.form-group -->
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>

          <div class="col-md-6">
          <div class="mb-2">
                    <label class="form-label" for="songaycong">Số ngày công</label>
                        <input type="text" class="form-control" id="songaycong" name="songaycong" value="{{ $chamcong->songaycong }}" required />
                </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="mb-2" >
                    <label class="form-label" for="nam">Năm</label>
                        <input type="text" class="form-control" id="nam" name="nam" value="{{ $chamcong->nam }}" required />
                </div>
                
            </div>

          </div>
          <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Thêm vào CSDL</button>
        </form>
        </div>
    </div>
@endsection