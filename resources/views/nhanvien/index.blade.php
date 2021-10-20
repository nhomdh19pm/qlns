@extends('layouts.app')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Phòng ban</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('nhanvien.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-center">
                <th >#</th>
                <th >Họ và tên</th>
                <th >Mức lương</th>
                <th >Bằng cấp</th>
                <th >Chuyên môn</th>
                <th >Ngoại ngữ</th>
                <th >Dân tộc</th>
                <th >Tôn giáo</th>
                <th >Giới tính</th>
                <th >Ngày sinh</th>
                <th >CMND</th>
                <th >SDT</th>
                <th >Dia chỉ</th>
                <th >Quê Quán</th>
                <th >Trạng thái</th>
                <th >Ngày nghỉ làm </th>
                <th >Hệ số lương</th>
                <th >Ảnh</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nhanvien as $value)
                <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->hovaten }}</td>
                            <td>{{ number_format($value->mucluong->luongcb) }}</td>
                            <td>{{ $value->ngoaingu->tenng }}</td>
                            <td>{{ $value->bangcap->tenbc }}</td>
                            <td>{{ $value->chuyenmon->tencm }}</td>
                            <td>{{ $value->dantoc->tendt }}</td>
                            <td>{{ $value->tongiao->tentg }}</td>
                            <td>
                                {{ ($value->gioitinh == 1) ? 'Nữ' : 'Nam'; }}
                            </td>
                            <td>{{ $value->ngaysinh }}</td>
                            <td>{{ $value->cmnd }}</td>
                            <td>{{ $value->sdt }}</td>
                            <td>{{ $value->diachi }}</td>
                            <td>{{ $value->quequan }}</td>
                            <td>{{ $value->trangthai }}</td>
                            <td>{{ $value->ngaynghilam }}</td>
                            <td>{{ $value->hesoluong }}</td>
                            <td>{{ $value->anh }}</td>
                            <td ><a href="{{ route('nhanvien.xoa',['id' => $value->id]) }}" onclick="confirm('Bạn có muốn xóa {{ $value->nhanvien }}')"><i class="fa fa-edit"></i></a></td>
                            <td ><a href="{{ route('nhanvien.sua',['id' => $value->id]) }}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection