@extends('layouts.app')
@section('content-header')
<h1>
        Bằng cấp
        <small>Sửa bằng cấp </small>
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
 <label class="form-label" for="tenbc"></label>
 <input type="text" class="form-control" id="tenpb" name="tenpb" value="{{ $bangcap->tenpb }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection