@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Sửa Nghỉ việc</strong>
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
                <form action="{{ route('nghiviec.sua', ['id' => $nghiviec->id]) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($nghiviec->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>


                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaybd">Ngày bắt đầu</label>
                        <input type="text" class="form-control" id="ngaybd" name="ngaybd" value="{{ $nghiviec->ngaybd }}" required />
                </div>

                <div class="mb-2" style="width:250px">
                    <label class="form-label" for="ngaykt">Ngày kết thúc</label>
                        <input type="text" class="form-control" id="ngaykt" name="ngaykt" value="{{ $nghiviec->ngaykt }}" required />
                </div>


                <div class="mb-2">
                    <label class="form-label" for="lydo">lý do</label>
                        <input type="text" class="form-control" id="lydo" name="lydo" value="{{ $nghiviec->lydo }}" required />
                </div>


                <div class="mb-2">
                    <label class="form-label" for="huongluong">Hưởng lương</label>

                    <select class="form-control" id="huongluong" name="huongluong">
                        <option value="0" {{ $nghiviec->huongluong == 0 ? 'selected' : '' }}>Không</option> 
                        <option value="1" {{ $nghiviec->huongluong == 1 ? 'selected' : '' }}>Có</option>              
                    </select>
                </div>


                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection