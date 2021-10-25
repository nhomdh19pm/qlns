@extends('layouts.app')
@section('content')
 <div class="card">
 <div class="card-header">Sửa loại sản phẩm</div>
 <div class="card-body">
 <form action="{{ route('dantoc.sua', ['id' => $dantoc->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tendt">Tên loại</label>
 <input type="text" class="form-control" id="tendt" name="tenpb" value="{{ $dantoc->tendt }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection