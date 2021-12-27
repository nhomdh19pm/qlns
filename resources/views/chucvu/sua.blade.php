
@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Chức vụ</strong>
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
 <form action="{{ route('chucvu.sua', ['id' => $chucvu->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tencv">Tên Chức vụ</label>
 <input type="text" class="form-control" id="tencv" name="tencv" value="{{ $chucvu->tencv }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection