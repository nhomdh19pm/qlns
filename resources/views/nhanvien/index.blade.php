@extends('layouts.admin')

@section('content-header')
<h1>
<strong>Quản lý nhân viên</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas ">Trang Chủ</i>
        <li class="fas active">Nhân viên</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p>
           

              <a href="{{ route('nhanvien.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a>
             
              <a href="{{ route('nhanvien.xuat') }}" class="btn btn-success mb-3"><i class="fal fa-download"></i> Xuất ra Excel</a>
              </p>
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr class="align-middle">
                  <th >#</th>
                  <th >Họ và tên</th>
                  <th >Mức lương</th>
                  <th >Bằng cấp</th>
                  <th >Chuyên môn</th>
                  <th >Giới tính</th>
                  <th >Trạng thái</th>
                  <th class="text-center" width="25%" >Ảnh</th>
                  <th ></th>
                  <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nhanvien as $value)
                <tr >
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->hovaten }}</td>
                            <td>{{ number_format($value->mucluong->luongcb) }}</td>
                            <td>{{ $value->bangcap->tenbc }}</td>
                            <td>{{ $value->chuyenmon->tencm }}</td>
                            <td>
                                {{ ($value->gioitinh == 1) ? 'Nữ' : 'Nam'; }}
                            </td>
                            <td>
                                {{ ($value->trangthai == 0) ? 'Đang làm việc' : 'Nghỉ việc'; }}
                                
                          
                                
                            </td>
                            <td class="text-center">
                              <img width="20%" height="20%"src="../storage/images/{{ $value->photo_path }}" >
                            </td>                          
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="javascript:eventXoa('{{ route('nhanvien.xoa',['id' => $value->id]) }}', '{{ $value->hovaten }}');"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('nhanvien.sua',['id' => $value->id]) }}"><i class="fa fa-info"></i> Chi tiết</a></td>                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <form action="{{ route('nhanvien.nhap') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
                          aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="importModalLabel">Nhập từ Excel</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="mb-0">
                                          <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                                          <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                              class="fal fa-times"></i> Hủy bỏ</button>
                                      <button type="submit" class="btn btn-danger"><i class="fal fa-upload"></i> Nhập dữ liệu</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
<script>
function eventXoa(url, ten)
{
  let check  = confirm('Bạn có muốn xóa "' + ten + '"');

  if (check)
    window.location.href= url;
}
</script>
@endsection