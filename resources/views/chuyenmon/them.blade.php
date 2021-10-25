@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Chuyên môn</div>
        <div class="card-body">
            <form action="{{ route('chuyenmon.them') }}" method="post">
                @csrf

                <div class="mb-2">
                    <input type="text" class="form-control @error('tenpb') is-invalid @enderror"  id="tencm"
                        name="tencm" required />
                    @error('chuyenmon')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
