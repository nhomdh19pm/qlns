@extends('layouts.app')

@section('content-header')
<h1>
      <strong>Thêm Thưởng phạt</strong>
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
            <form action="{{ route('Thuongphat.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($nhanvien as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->nhanvien }}
                            </option>
                        @endforeach
                        @error('nhanvien_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
