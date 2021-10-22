@extends('layouts.app')
@section('content')
 <div class="card">
 <div class="card-header">Sửa loại sản phẩm</div>
 <div class="card-body">
 <form action="{{ route('ngoaingu.sua', ['id' => $phongban->id]) }}" method="post">
 @csrf
 
 <div class="mb-2">
 <label class="form-label" for="tenng">Tên loại</label>
 <input type="text" class="form-control" id="tenng" name="tenpb" value="{{ $ngoaingu->tenng }}" required />
 </div>
 
 <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cập nhật</button>
 </form>
 </div>
 </div>
@endsection