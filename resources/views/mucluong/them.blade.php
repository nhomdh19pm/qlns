@extends('layouts.app')
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
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('mucluong.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <label class="form-label" for="phongban_id">Loại Phim</label>
                    <select name="chucvu_id" id="phongban_id" class="form-control @error('phongban_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($phongban as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->phongban->tenpb }}
                            </option>
                        @endforeach
                        @error('phongban_id')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection