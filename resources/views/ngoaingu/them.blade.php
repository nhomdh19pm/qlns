@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Thêm ngoại ngữ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Ngoại ngữ</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('ngoaingu.them') }}" method="post">
                @csrf

                <div class="mb-2">
                     <label class="form-label" for="tenng">Tên ngoại ngữ</label>
                    <input type="text" class="form-control @error('tenng') is-invalid @enderror"  id="tenng"
                        name="tenng" required />
                    @error('ngoaingu')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
