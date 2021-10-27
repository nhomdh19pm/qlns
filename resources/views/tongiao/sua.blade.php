@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Sửa Tôn giáo</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Tôn giáo</li>
      </ol>
@endsection
@section('content')
 <div class="card">
 <div class="card-body">
 <form action="{{ route('tongiao.sua', ['id' => $tongiao->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tentg">Tên Tôn giáo</label>
 <input type="text" class="form-control" id="tentg" name="tentg" value="{{ $tongiao->tentg }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection