@extends('layouts.admin')
@section('content')
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
        <form action="{{ route('mucluong.them') }}" method="post">
        @csrf
          <div class="row">
            <div class="col-md-6">
            <div class="mb-2">
                    <label class="form-label" for="phongban_id">Tên phòng ban</label>
                    <select name="phongban_id" id="phongban_id" class="form-control @error('phongban_id')  is-invalid @enderror" 
                        required>
                        @foreach ($phongban as $value)
                        <option value="{{ $value->id }}" {{ ($mucluong->phongban_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tenpb }}
                            </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->


                <div class="mb-2">
                    <label class="form-label" for="luongcb">Lương cơ bản</label>
                        <input type="text" class="form-control" id="luongcb" name="luongcb" value="{{ $mucluong->luongcb }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">

            <div class="mb-2">
                    <label class="form-label" for="chucvu_id">Tên chức vụ</label>
                    <select name="chucvu_id" id="chucvu_id" class="form-control @error('chucvu_id')  is-invalid @enderror" 
                        required>
                        @foreach ($chucvu as $value)
                        <option value="{{ $value->id }}" {{ ($mucluong->chucvu_id == $value->id) ? 'selected' : '' }}>
                                {{ $value->tencv }}
                            </option>
                        @endforeach
                    </select>
                </div>
              <!-- /.form-group -->
              <div class="mb-2">
                    <label class="form-label" for="phucap">Phụ cấp</label>
                        <input type="text" class="form-control" id="phucap" name="phucap" value="{{ $mucluong->phucap }}" required />
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Thêm vào CSDL</button>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
@endsection
