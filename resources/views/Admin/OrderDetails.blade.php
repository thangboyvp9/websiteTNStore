@extends("admin")
@section('admin_content')
<div id="page-wrapper" style="min-height: 223px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách Khách Hàng
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="/TimKiem_KH" method="get">                    
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
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Đơn giá (đ)</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền (đ)</th>
                                            <th>TT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_details as $r)
                                        <tr id="row_21">
                                            <td>{{$tt++}}</td>
                                            <td>{{$r->PhuKien->TenSP}}</td>
                                            <td> <img src="{{asset('img'.'/'.$r->PhuKien->HinhAnh)}}" alt="" > </td>
                                            <td>{{ $r->PhuKien->DonGia }}</td>
                                            <td>{{ $r->Quantity }}</td>
                                            <td>{{ $r->UnitPrice*$r->Quantity }}</td>
                                            <td>
                                                
                                                <form role="form" action="" method="post">
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
                                    {{ $order_details->links() }}
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