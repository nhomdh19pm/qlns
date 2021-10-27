@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Sửa ngoại ngữ</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Ngoại ngữ</li>
      </ol>
@endsection
@section('content')
 <div class="card">
 <div class="card-header"></div>
 <div class="card-body">
 <form action="{{ route('ngoaingu.sua', ['id' => $ngoaingu->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenng">Tên ngoại ngữ</label>
 <input type="text" class="form-control" id="tenng" name="tenng" value="{{ $ngoaingu->tenng }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection