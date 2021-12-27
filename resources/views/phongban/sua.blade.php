@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa phòng ban</strong>
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
 <form action="{{ route('phongban.sua', ['id' => $phongban->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenpb">Tên phòng ban</label>
 <input type="text" class="form-control" id="tenpb" name="tenpb" value="{{ $phongban->tenpb }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection