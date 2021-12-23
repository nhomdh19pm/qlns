@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">

                <h3>Trang Admin</h3>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Trang CHỦ') }}
                            
                        </div>
                    @endif

                    {{ __('') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
