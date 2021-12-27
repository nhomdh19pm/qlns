@extends('layouts.app')
@section('content-header')
<h1>
<strong>Quản lý Nhận lương</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas ">Trang Chủ</i>
        <li class="fas active">Nhận Lương</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr class="align-middle">
                  <th >#</th>
                  <th >Họ và tên</th>
                  <th >Mức lương</th>
                  <th >Hệ số lương</th>
                  <th >phụ cấp</th>
                  <th >Số ngày công</th>
                  <th >Thưởng</th>
                  <th >Phạt</th>
                  <th >Tạm ứng</th>
                  <th >Khẩu trừ</th>
                  <th >Tháng</th>
                  <th >Năm</th>
                  <th ></th>
                  <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nhanluong as $value)
                <tr class="hung-nguyen">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->nhanvien->hovaten }}</td>
                            <td>{{ number_format($value->luongcb) }}</td>
                            <td>{{ $value->hesoluong }}</td>
                            <td>{{ $value->phucap }}</td>                      
                            <td>{{ $value->songaycong }}</td>                                         
                            <td>{{ $value->thuong }}</td>                      
                            <td>{{ $value->phat }}</td>                      
                            <td>{{ $value->tamung }}</td>                      
                            <td>{{ number_format($value->mucdong)  }}đ</td>                      
                            <td>{{ $value->thang }}</td>                      
                            <td>{{ $value->nam }}</td>                      
                            <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="javascript:eventXoa('{{ route('nhanluong.xoa',['id' => $value->id]) }}', '{{ $value->hovaten }}');"><i class="fa fa-trash"></i> Xóa</a></td>
                            <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('nhanluong.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<script>
function eventXoa(url, ten)
{
  let check  = confirm('Bạn có muốn xóa "' + ten + '"');

  if (check)
    window.location.href= url;
}
</script>
@endsection