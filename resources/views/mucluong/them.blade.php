@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Thêm Mức lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Mức lương</li>
      </ol>
@endsection
@section('content')
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
        <form action="{{ route('mucluong.them') }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="phongban_id">Tên phòng ban</label>
                    <select name="phongban_id" id="phongban_id" class="form-control @error('phongban_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($phongban as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenpb }}
                            </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->

              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="luongcb">Lưng cơ bản</label>
                    <input type="text" class="form-control @error('luongcb') is-invalid @enderror"  id="luongcb"
                        name="luongcb" required />
                    @error('mucluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="chucvu_id">Tên chức vụ</label>
                    <select name="chucvu_id" id="chucvu_id" class="form-control @error('chucvu_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($chucvu as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tencv }}
                            </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                <label class="form-label" for="phucap">Phụ cấp</label>
                    <input type="text" class="form-control @error('phucap') is-invalid @enderror"  id="phucap"
                        name="phucap" required />
                    @error('mucluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
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
