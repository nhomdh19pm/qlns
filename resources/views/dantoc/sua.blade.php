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
 <form action="{{ route('dantoc.sua', ['id' => $dantoc->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tendt">Tên dân tộc</label>
 <input type="text" class="form-control" id="tendt" name="tenpb" value="{{ $dantoc->tendt }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection