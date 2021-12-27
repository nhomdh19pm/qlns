@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Bảo hiểm</strong>
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
                <form action="{{ route('baohiem.sua', ['id' => $baohiem->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($baohiem->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('baohiem')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="loaibaohiem_id">Loại bảo hiểm</label>
                    <select name="loaibaohiem_id" id="loaibaohiem_id" class="form-control @error('loaibaohiem_id')  is-invalid @enderror" 
                        required>
                        @foreach ($loaibaohiem as $value)
                        <option value="{{ $value->id }}" {{ ($baohiem->loaibaohiem_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenbh }}
                            </option>
                        @endforeach
                        @error('baohiem')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="maso">Mã số thẻ</label>
                        <input type="text" class="form-control" id="maso" name="maso" value="{{ $baohiem->maso }}" required />
                </div>

                <div class="mb-2">
                    <label class="form-label" for="noicap">Nơi cấp</label>
                        <input type="text" class="form-control" id="noicap" name="noicap" value="{{ $baohiem->noicap }}" required />
                </div>
                <div style="width:150px" class="mb-2">
                    <label class="form-label" for="ngaycap">Ngày cấp</label>
                        <input type="date" class="form-control" id="ngaycap" name="ngaycap" value="{{ $baohiem->ngaycap }}" required />
                </div>
                <div style="width:150px" class="mb-2">
                    <label class="form-label" for="ngayhethan">Ngày hết hạn</label>
                        <input type="text" class="form-control" id="ngayhethan" name="ngayhethan" value="{{ $baohiem->ngayhethan }}" required />
                </div>
                <div class="mb-2">
                    <label class="form-label" for="mucdong">Mức đóng</label>
                        <input type="text" class="form-control" id="mucdong" name="mucdong" value="{{ $baohiem->mucdong }}" required />
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
