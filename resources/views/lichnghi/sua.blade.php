@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Sửa Lịch nghỉ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Lịch nghỉ</li>
      </ol>
@endsection
@section('content')
<div class="card">
 <div class="card-body">
 <form action="{{ route('lichnghi.sua', ['id' => $lichnghi->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenln">Tên lịch nghỉ</label>
 <input type="text" class="form-control" id="tenln" name="tenln" value="{{ $lichnghi->tenln }}" required />
 </div>
 <div class="mb-2">
 <label class="form-label" for="ngaybh">Ngày bắt đầu</label>
 <input type="date" class="form-control" id="ngaybd" name="ngaybd" value="{{ $lichnghi->ngaybd }}" required />
 </div>
 <div class="mb-2">
 <label class="form-label" for="ngaykt">Ngày kết thúc</label>
 <input type="date" class="form-control" id="ngaykt" name="ngaykt" value="{{ $lichnghi->ngaykt }}" required />
 </div>
 <div class="mb-2">
 <label class="form-label" for="huongluong">Hưởng lương</label>
 <input type="text" class="form-control" id="huongluong" name="huongluong" value="{{ $lichnghi->huongluong }}" required />
 </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
        </form>
      </div>
 </div>
@endsection