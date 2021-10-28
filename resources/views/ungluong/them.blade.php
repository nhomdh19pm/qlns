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
      <li class="active"><a href="{{ route('ungluong') }}"><i class="fa fa-money-check-alt"></i> <span>Ứng lương</span></a></li>
      <li><a href="{{ route('loaibaohiem') }}"><i class="fa fa-money-check-alt"></i> <span>Loại bảo hiểm</span></a></li>
      <li><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
      <li><a href="{{ route('lichnghi') }}"><i class="fa fa-money-check-alt"></i> <span>Lịch Nghỉ</span></a></li>
@endsection
@section('content-header')
<h1>
      <strong>Thêm Ứng lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Ứng lương</li>
      </ol>
@endsection
@section('content')

    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="{{ route('ungluong.them') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên Nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id') is-invalid @enderror"
                        required>
                        <option value="">--Chọn--</option>
                        @foreach ($nhanvien as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('thuongphat')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>




                <div class="mb-2">
                <label class="form-label" for="loai">Loại Thưởng/Phạt</label>
                    <input type="text" class="form-control @error('loai') is-invalid @enderror"  id="loai"
                        name="loai" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>




                <div class="mb-2">
                <label class="form-label" for="sotien">Số tiền phạt</label>
                    <input type="text" class="form-control @error('sotien') is-invalid @enderror"  id="sotien"
                        name="sotien" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>




                <div class="mb-2">
                <label class="form-label" for="lydo">Lý do phạt</label>
                    <input type="text" class="form-control @error('lydo') is-invalid @enderror"  id="lydo"
                        name="lydo" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>


                <div class="mb-2">
                <label class="form-label" for="thang">Của tháng</label>
                    <input type="text" class="form-control @error('thang') is-invalid @enderror"  id="thang"
                        name="thang" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                <label class="form-label" for="nam">Của năm</label>
                    <input type="text" class="form-control @error('nam') is-invalid @enderror"  id="nam"
                        name="nam" required />
                    @error('thuongphat')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
