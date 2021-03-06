@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Thêm Lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Lương</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">

            <form action="{{ route('nhanluong.them', ['id' => $nhanvien->id]) }}" method="post">   
            @csrf

            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($hovaten as $value)
                        <option value="{{ $value->id }}" {{ ( $nhanvien->id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('hopdong')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">  
                <label class="form-label" for="mucluong">Lương cơ bản</label>
                <input value="{{ $luongcb }}" type="text" class="form-control" id="luongcb" name="luongcb"  required />
                </div>

                <div class="mb-2">
                <label class="form-label" for="phucap">Phụ cấp</label>
                    <input value="{{ $phucap }}" type="text" class="form-control @error('phucap') is-invalid @enderror"  id="phucap"
                        name="phucap" required />
                    @error('phucap')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label" for="hesoluong">Hệ số lương</label>
                        <input type="text" class="form-control" id="hesoluong" name="hesoluong" value="{{ $nhanvien->hesoluong }}" required />
                </div>

                <div class="mb-2">
                <label class="form-label" for="songaycong">Số ngày công</label>
                    <input value="{{ $ngaycong }}" type="text" class="form-control @error('songaycong') is-invalid @enderror"  id="songaycong"
                        name="songaycong" required />
                    @error('songaycong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="thuong">Thưởng</label>
                    <input value="{{ $thuong }}" type="text" class="form-control @error('thuong') is-invalid @enderror"  id="thuong"
                        name="thuong" required />
                    @error('thuong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </div>





            <div class="col-md-6">
                

            <div class="mb-2">
                <label class="form-label" for="phat">Phạt</label>
                    <input value="{{ $phat }}" type="text" class="form-control @error('phat') is-invalid @enderror"  id="phat"
                        name="phat" required />
                    @error('phat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="tamung">Tạm ứng</label>
                    <input value="{{ $ungluong }}" type="text" class="form-control @error('ungluong') is-invalid @enderror"  id="tamung"
                        name="tamung" required />
                    @error('ungluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label" for="mucdong">Mức đóng</label>
                        <input type="text" class="form-control" id="khautru" name="khautru" value="{{ $nhanvien->mucdong }}" required />
                </div>

                <div class="mb-2">
                <label class="form-label" for="thang">Tháng</label>
                    <input type="text" class="form-control @error('thang') is-invalid @enderror"  id="thang"
                        name="thang" required />
                    @error('thang')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="nam">Năm</label>
                    <input type="text" class="form-control @error('nam') is-invalid @enderror"  id="nam"
                        name="nam" required />
                    @error('nam')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>


            </div>
                


                
            </form>
        </div>
    </div>
@endsection
