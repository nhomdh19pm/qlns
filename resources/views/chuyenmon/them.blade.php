@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Quản lý Chuyên môn</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active"> Chuyên môn</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('chuyenmon.them') }}" method="post">
                @csrf

                <div class="mb-2">
                <label class="form-label" for="tencm">Tên chuyên môn</label>
                    <input type="text" class="form-control @error('tenpb') is-invalid @enderror"  id="tencm"
                        name="tencm" required />
                    @error('chuyenmon')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
