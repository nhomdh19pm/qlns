@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Sửa Bằng cấp</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Bằng cấp</li>
      </ol>
@endsection
@section('content')
 <div class="card">
 <div class="card-header"></div>
 <div class="card-body">
 <form action="{{ route('bangcap.sua', ['id' => $bangcap->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenbc">Tên Bằng cấp</label>
 <input type="text" class="form-control" id="tenbc" name="tenbc" value="{{ $bangcap->tenbc }}" required />
 </div>
 
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection