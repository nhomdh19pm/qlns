@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Thêm loại bảo hiểm</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Bảo hiểm</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('loaibaohiem.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <input type="text" class="form-control @error('tenbh') is-invalid @enderror"  id="tenbh"
                        name="tenbh" required />
                    @error('loaibaohiem')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
