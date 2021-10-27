@extends('layouts.app')
@section('content-header')
<h1>
      <strong>Thêm Mức lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Mức lương</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('mucluong.them') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="phongban_id">Tên phòng ban</label>
                    <select name="phongban_id" id="phongban_id" class="form-control @error('phongban_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($phongban as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tenpb }}
                            </option>
                        @endforeach
                        @error('phongban')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>


                <div class="mb-2">
                    <label class="form-label" for="chucvu_id">Tên chức vụ</label>
                    <select name="chucvu_id" id="chucvu_id" class="form-control @error('chucvu_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($chucvu as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->tencv }}
                            </option>
                        @endforeach
                        @error('chucvu')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>


                <div class="mb-2">
                <label class="form-label" for="luongcb">Lưng cơ bản</label>
                    <input type="text" class="form-control @error('luongcb') is-invalid @enderror"  id="luongcb"
                        name="luongcb" required />
                    @error('mucluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                
                
                <div class="mb-2">
                <label class="form-label" for="phucap">Phụ cấp</label>
                    <input type="text" class="form-control @error('phucap') is-invalid @enderror"  id="phucap"
                        name="phucap" required />
                    @error('mucluong')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
