@extends("admin")
@section('admin_content')
<div id="page-wrapper" style="min-height: 223px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh Sách Đơn Hàng
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách các đơn hàng
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/search_order" method="get">      
                            @csrf
                                <div class="row form-group">
                                    <div class="col-lg-12">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="txtSearch">
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            <div class="table-responsive">
                                @php 
                                $tt = 1;
                                @endphp
                                <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Tên khách hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Số điện thoại nhận</th>
                                            <th>Địa chỉ nhận</th>
                                            <th>Tổng tiền (đ)</th>
                                            <th>Ghi chú</th>
                                            <th>Trạng Thái</th>
                                            <th>Xem</th>
                                            <th>TT</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($db as $r)
                                        <tr id="row_21">
                                            <td>{{$tt++}}</td>
                                            <td>{{$r->id}}</td>
                                            <td>{{ $r->KhachHang->TenKhachHang}}</td>
                                            <td>{{ \Carbon\Carbon::parse($r->OrderDate)->format('d/m/Y') }}</td>
                                            <td>{{ $r->ShipPhone }}</td>
                                            <td>{{ $r->ShipAddress }}</td>
                                            <td>{{ number_format($r->total ) }}</td>
                                            <td>{{ $r->Note }}</td>
                                            <td>                           
                                                @if( $r->Status == 0)
                                                <a href="#" class="label label-warning">Chờ xử lý</a>
                                                @else
                                                <a href="#" class="label-success label">Đã xử lý</a>
                                                @endif</td>
                                                <td  class="right__iconTable">
                                                    <a  data-id ="{{ $r->id }}" href="{{ route('order.show', $r->id) }}"><img src="{{ asset('assets/eye.svg') }}" alt="" style="width:auto;"></a>
                                                </td>
                                                <td>
                                                    <form role="form" action="{{ route('order.destroy', $r->id) }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button  type="submit" onclick="return confirm('Bạn chắc chắn xóa sản phẩm?')"><img class="action" src="{{ asset('assets/icon-trash.svg') }}" alt=""></button>   
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div>
                                        {{ $db->links() }}
                                    </div>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection