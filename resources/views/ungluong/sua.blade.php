@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Thưởng phạt</strong>
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



            <form action="{{ route('ungluong.sua', ['id' => $ungluong->id]) }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select disabled name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($ungluong->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('ungluong')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="thang">Tháng</label>
                        <input type="text" class="form-control" id="thang" name="thang" value="{{ $ungluong->thang }}" required />
                </div>

              <!-- /.form-group -->
            </div>

            <div class="col-md-6">

                <div class="mb-2">
                    <label class="form-label" for="sotien">Số tiền</label>
                        <input type="text" class="form-control" id="sotien" name="sotien" value="{{ $ungluong->sotien }}" required />
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="nam">Năm</label>
                        <input type="text" class="form-control" id="nam" name="nam" value="{{ $ungluong->nam }}" required />
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">


                <div class="mb-2">
                    <label class="form-label" for="lydo">lý do</label>
                        <input type="text" class="form-control" id="lydo" name="lydo" value="{{ $ungluong->lydo }}" required />
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