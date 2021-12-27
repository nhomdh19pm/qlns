@extends('layouts.admin')
@section('content-header')
<h1>
      <strong>Quản lý Nghỉ việc</strong>
      <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Trang Chủ</a></li>
        <li class="active">Nghỉ việc</li>
      </ol>
@endsection
@section('content')
<div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p><a href="{{ route('nghiviec.them') }}" class="btn btn-info"><i class="fas fa-plus"></i> Thêm mới</a></p>
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr >
                <th >#</th>
                <th >Họ và tên</th>
                <th >Ngày bắt đầu</th>
                <th >Ngày kết thúc</th>
                <th >Lý do</th>
                <th >Hưởng lương</th>
                <th ></th>
                <th ></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($nghiviec as $value)
                <tr >
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nhanvien->hovaten }}</td>                           
                    <td>{{ $value->ngaybd }}</td>
                    <td>{{ $value->ngaykt }}</td>
                    <td>{{ $value->lydo }}</td>
                    <td>
                        {{ ($value->loai == 0) ? 'Không' : 'Có'; }}
                    </td>
                    <td class="text-center" width="10%"><a class="btn btn-outline-primary"href="javascript:eventXoa('{{ route('nghiviec.xoa',['id' => $value->id]) }}', '{{ $value->nhanvien->hovaten }}');"><i class="fa fa-trash"></i> Xóa</a></td>
                    <td class="text-center" width="10%"><a class="btn btn-outline-danger" href="{{ route('nghiviec.sua',['id' => $value->id]) }}"><i class="fa fa-edit"></i> Sửa</a></td>
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