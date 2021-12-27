@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Quản lý Dân tộc</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Dân tộc</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('dantoc.them') }}" method="post">
                @csrf

                <div class="mb-2">
                <label class="form-label" for="tendt">Tên dân tộc</label>
                    <input type="text" class="form-control @error('tendt') is-invalid @enderror"  id="tendt"
                        name="tendt" required />
                    @error('dantoc')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
