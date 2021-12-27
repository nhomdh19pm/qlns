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
                <form action="{{ route('hopdong.sua', ['id' => $hopdong->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($hopdong->nhanvien_id == $value->id) ? 'selected' : '' }}>
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

                    <select class="form-control" id="loaihopdong" name="loaihopdong">
                        <option value="0" {{ $hopdong->loaihopdong == 0 ? 'selected' : '' }}>thử việc</option> 
                        <option value="1" {{ $hopdong->loaihopdong == 1 ? 'selected' : '' }}>Chính thức</option>              
                    </select>
                </div>

                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaybd">Ngày bắt đầu hợp đồng</label>
                        <input type="date" class="form-control" id="ngaybd" name="ngaybd" value="{{ $hopdong->ngaybd }}" required />
                </div>

                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaykt">Ngày kết thúc hợp đồng</label>
                        <input type="date" class="form-control" id="ngaykt" name="ngaykt" value="{{ $hopdong->ngaykt }}" required />
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
