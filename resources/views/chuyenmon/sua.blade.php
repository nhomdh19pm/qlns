@extends('layouts.app')
@section('content-header')
<h1>
        Chuyên môn
        <small>Quản lý chuyên môn </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Chuyên môn</li>
      </ol>
@endsection
@section('content')
 <div class="card">
 <div class="card-header">Sửa chuyên môn</div>
 <div class="card-body">
 <form action="{{ route('chuyenmon.sua', ['id' => $chuyenmon->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tencm">Tên chuyên môn</label>
 <input type="text" class="form-control" id="tenpb" name="tencm" value="{{ $chuyenmon->tencm }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection