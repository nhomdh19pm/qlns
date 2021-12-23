@extends('layouts.app')

@section('content-header')
<h1>
      <strong>Thêm Bằng cấp</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Bằng cấp</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('bangcap.them') }}" method="post">
                @csrf

                <div class="mb-2">
                <label class="form-label" for="tenbc">Tên Bằng cấp</label>
                    <input type="text" class="form-control @error('tenbc') is-invalid @enderror"  id="tenbc"
                        name="tenbc" required />
                    @error('bangcap')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
