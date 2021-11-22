@extends('layouts.app')
@section('active')
    <li  class=""><a href="{{ route('nhanvien') }}"><i class="fa fa-id-card"></i> <span>Nhân Viên</span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-info-circle"></i> <span>Thông Tin</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ route('phongban') }}"><i class="fa fa-tasks-alt"></i> <span>Phòng Ban</span></a></li>        
          <li class=""><a href="{{ route('tongiao') }}"><i class="fa fa-star-of-david"></i> <span>Tôn Giáo</span></a></li>
          <li class=""><a href="{{ route('chuyenmon') }}"><i class="fa fa-user-tie"></i> <span>Chuyên Môn</span></a></li>
          <li class=""><a href="{{ route('bangcap') }}"><i class="fa fa-id-card-alt"></i> <span>Bằng Cấp</span></a></li>
          <li class=""><a href="{{ route('ngoaingu') }}"><i class="fa fa-globe-asia"></i> <span>Ngoại Ngữ</span></a></li>
          <li class=""><a href="{{ route('dantoc') }}"><i class="fa fa-flag-usa"></i> <span>Dân Tộc</span></a></li>
          <li class=""><a href="{{ route('chucvu') }}"><i class="fa fa-users"></i> <span>Chức Vụ</span></a></li>
        </ul>
    </li>
    <li class="treeview active">
        <a href="#"><i class="fas fa-hospitals"></i> <span>Lương và các khoản</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="{{ route('ungluong') }}"><i class="fad fa-money-check-edit-alt"></i> <span>Ứng lương</span></a></li>
          <li class=""><a href="{{ route('mucluong') }}"><i class="fa fa-money-check-alt"></i> <span>Mức lương</span></a></li>
          <li ><a href="{{ route('chamcong') }}"><i class="fad fa-calendar-alt"></i> <span>Chấm Công</span></a></li>
          <li class=""><a href="{{ route('nhanluong') }}"><i class="fad fa-cash-register"></i> <span>Nhận Lương</span></a></li>
          <li class="active"><a href="{{ route('thuongphat') }}"><i class="fa fa-gift-card"></i> <span>Thưởng phạt</span></a></li>
        </ul>
    </li>
    <li class=""><a href="{{ route('hopdong') }}"><i class="fas fa-file-signature"></i> <span>Hợp đồng</span></a></li>
    <li class=""><a href="{{ route('user') }}"><i class="fas fa-user"></i> <span>Tài khoản</span></a></li>
@endsection
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