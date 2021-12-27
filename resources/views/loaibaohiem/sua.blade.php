@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa loại bảo hiểm</strong>
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
 <form action="{{ route('loaibaohiem.sua', ['id' => $loaibaohiem->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenbh">Tên loại</label>
 <input type="text" class="form-control" id="tenpb" name="tenbh" value="{{ $loaibaohiem->tenbh }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection