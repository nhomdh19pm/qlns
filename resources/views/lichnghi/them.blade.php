@extends('layouts.app')

@section('content-header')
<h1>
      <strong>Thêm lịch nghỉ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Lịch nghỉ</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('lichnghi.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <h5>Tên lịch nghỉ</h5>
                    <input type="text" class="form-control @error('tenln') is-invalid @enderror"  id="tenln"
                        name="tenln" required />
                    @error('lichnghi')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-2">
                <h5>Ngày bắt đầu</h5>
                    <input type="date" class="form-control @error('ngaybd') is-invalid @enderror"  id="ngaybd"
                        name="ngaybd" required />
                    @error('lichnghi')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-2">
                <h5>Ngày kết thúc</h5>
                    <input type="date" class="form-control @error('ngaykt') is-invalid @enderror"  id="ngaykt"
                        name="ngaykt" required />
                    @error('lichnghi')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-2">
                <h5>Hưởng lương</h5>
                    <input type="text" class="form-control @error('huongluong') is-invalid @enderror"  id="huongluong"
                        name="huongluong" required />
                    @error('lichnghi')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
