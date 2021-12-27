@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">Thêm Người Dùng</div>
        <div class="card-body">
            <form action="{{ route('user.them') }}" method="post">
                @csrf
                <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label" for="hovaten">Tên tài khoản</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name"
                        name="name" required />
                    @error('name')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
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
                       
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="chucvu">Chức Vụ</label>
                    <select class="form-select" @error('chucvu') is-invalid @enderror" id="chucvu" name="chucvu" required>
                            <option value="">--Chọn--</option>
                            <option value="0">
                                Nhân Viên
                            </option>
                            <option value="1">
                                Quản Lí
                            </option>
                    </select>
                    @error('chucvu')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" loaiphim id="email"
                        name="email" required />
                    @error('email')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Mật Khẩu</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" loaiphim
                        id="password" name="password" required />
                    @error('password')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Nhập Lại Mật Khẩu</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        loaiphim id="password_confirmation" name="password_confirmation" required />
                    @error('password_confirmation')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection 
