@extends('layouts.app')
@section('active')
      <li><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
      <li><a href="{{ route('phongban') }}"><i class="fa fa-users"></i> <span>Phòng Ban</span></a></li>
      <li><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>     
      <li><a href="{{ route('tongiao') }}"><i class="fa fa-laptop-house"></i> <span>Tôn Giáo</span></a></li>
      <li><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
      <li><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
      <li><a href="{{ route('ngoaingu') }}"><i class="fa fa-laptop-house"></i> <span>Ngoại Ngữ</span></a></li>
      <li><a href="{{ route('dantoc') }}"><i class="fa fa-laptop-house"></i> <span>Dân Tộc</span></a></li>
      <li><a href="{{ route('thuongphat') }}"><i class="fa fa-laptop-house"></i> <span>Thưởng phạt</span></a></li>
      <li><a href="{{ route('hopdong') }}"><i class="fa fa-laptop-house"></i> <span>Hợp đồng</span></a></li>
      <li><a href="{{ route('ungluong') }}"><i class="fa fa-money-check-alt"></i> <span>Ứng lương</span></a></li>
      <li><a href="{{ route('loaibaohiem') }}"><i class="fa fa-money-check-alt"></i> <span>Loại bảo hiểm</span></a></li>
      <li class="active"><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
      <li><a href="{{ route('lichnghi') }}"><i class="fa fa-money-check-alt"></i> <span>Lịch Nghỉ</span></a></li>
@endsection
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
