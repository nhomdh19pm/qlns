@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">Sữa Người Dùng</div>
        <div class="card-body">
            <form action="{{ route('user.sua', ['id' => $user->id]) }}) }}" method="post">
                @csrf
                <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label" for="name">Tên</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" loaiphim id="name"
                        name="name" value="{{ $user->name }}" required />
                    @error('name')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label class="form-label" for="nhanvien_id">Tên nhân viên</label>
                    <select name="nhanvien_id" id="nhanvien_id" class="form-control @error('nhanvien_id')  is-invalid @enderror" 
                        required>
                        @foreach ($nhanvien as $value)
                        <option value="{{ $value->id }}" {{ ($user->nhanvien_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->hovaten }}
                            </option>
                        @endforeach
                        @error('nhanvien')
                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                        @enderror
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="chucvu">Chức Vụ</label>
                    <select class="form-select" @error('chucvu') is-invalid @enderror" id="chucvu" name="chucvu" required>
                        <option value="">--Chọn--</option>
                        <option value="0" {{ $user->chucvu == 0 ? 'selected' : '' }}>
                            Nhân Viên
                        </option>
                        <option value="1"{{ $user->chucvu == 1 ? 'selected' : '' }}>
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
                    <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email"
                        name="email" value="{{ $user->email }}" required />
                    @error('email')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Mật Khẩu</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                        id="password" name="password" value="{{ $user->password }}" required />
                    @error('password')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3" style="display: none;">
                    <label class="form-label" for="password_confirmation">Nhập Lại Mật Khẩu</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                         id="password_confirmation" name="password_confirmation" value="{{ $user->password }}" required />
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
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#change_password_group").hide();
            $("#change_password_checkbox").change(function() {
                if ($(this).is(":checked")) {
                    $("#change_password_group").show();
                    $("#change_password_group :input").attr("required", "required");
                } else {
                    $("#change_password_group").hide();
                    $("#change_password_group :input").removeAttr("required");
                }
            });
        });
    </script>
@endsection
