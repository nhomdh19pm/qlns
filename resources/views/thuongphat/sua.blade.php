@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Thưởng phạt</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Thưởng phạt</li>
      </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
                <form action="{{ route('thuongphat.sua', ['id' => $thuongphat->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($thuongphat->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('thuongphat')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="loai">Loại</label>

                    <select class="form-control" id="loai" name="loai">
                        <option value="0" {{ $thuongphat->loai == 0 ? 'selected' : '' }}>Thưởng</option> 
                        <option value="1" {{ $thuongphat->loai == 1 ? 'selected' : '' }}>Phạt</option>              
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="sotien">Số tiền</label>
                        <input type="text" class="form-control" id="sotien" name="sotien" value="{{ $thuongphat->sotien }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="lydo">lý do</label>
                        <input type="text" class="form-control" id="lydo" name="lydo" value="{{ $thuongphat->lydo }}" required />
                </div>


                <div class="mb-2">
                    <label class="form-label" for="thang">lý do</label>
                        <input type="text" class="form-control" id="thang" name="thang" value="{{ $thuongphat->thang }}" required />
                </div>


                <div class="mb-2">
                    <label class="form-label" for="nam">lý do</label>
                        <input type="text" class="form-control" id="nam" name="nam" value="{{ $thuongphat->nam }}" required />
                </div>


                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection