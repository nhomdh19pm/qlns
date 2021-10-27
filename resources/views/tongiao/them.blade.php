@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Thêm Tôn giáo</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Tôn giáo</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tongiao.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <input type="text" class="form-control @error('tentg') is-invalid @enderror"  id="tentg"
                        name="tentg" required />
                    @error('tongiao')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
