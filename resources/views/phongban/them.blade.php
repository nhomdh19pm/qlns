@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Thêm phòng ban</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Phòng ban</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('phongban.them') }}" method="post">
                @csrf

                <div class="mb-2">
                <label class="form-label" for="tenpb">Tên phòng ban</label>
                    <input type="text" class="form-control @error('tenpb') is-invalid @enderror"  id="tenpb"
                        name="tenpb" required  autofocus/>
                    @error('phongban')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection

