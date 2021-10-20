@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                                <input type="text"
                                    class="form-control{{ $errors->has('email') || $errors->has('username') ? ' is-invalid' : '' }}"
                                    id="email" name="email" value="{{ old('email') }}"
                                    placeholder="Email hoặc Tên đăng nhập" required />
                                @if ($errors->has('email') || $errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" Placeholder="Password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-left">
                                    @if (Route::has('login'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('register') }}">
                                            Đăng ký
                                        </a>
                                    @endif
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('password.request') }}">
                                            Quên Mât Khẩu
                                        </a>
                                    @endif
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
