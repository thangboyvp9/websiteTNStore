@extends("admin")
@section('admin_content')
<div id="page-wrapper" style="min-height: 223px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách Nhà Cung Cấp
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
                        <form action="/TimKiem_NCC" method="get">                    
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="txtSearch">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                                            Thêm mới
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <div class="table-responsive">
                            @php 
                            $tt = 0;
                            @endphp
                            <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tên Nhà Cung Cấp</th>
                                        <th>Địa chỉ</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>TT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($db as $r)
                                    <tr id="row_21">
                                        <td>{{$tt++}}</td>
                                        <td>{{$r->TenNhaCungCap}}</td>
                                        <td>{{$r->DiaChi}}</td>
                                        <td>{{$r->Phone}}</td>
                                        <td>{{$r->Email}}</td>
                                        <td>
                                          <a href="" data-toggle="modal" data-target="#modelIds"></a>
                                            <a href="{{ route('NhaCungCap.edit', $r->id) }}"><button  type="submit" ><img class="action" src="{{asset('assets/icon-edit.svg')}}" alt=""></button></a>
                                            <form role="form" action="{{ route('NhaCungCap.destroy', $r->id) }}" method="post">
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
        <!-- Modal -->
        
        <form role="form" action="{{ route('NhaCungCap.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">THÊM NHÀ CUNG CẤP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Tên Nhà Cung Cấp</label>
                                <input  type="text" id="name" class="form-control" name="txtName" aria-describedby="helpId" placeholder="">
                                <label for="txtAd">Địa chỉ</label>
                                <input  type="text" id="Describe" class="form-control" name="txtDiaChi" aria-describedby="helpId" placeholder="">
                                <label for="txtsdt">Phone</label>
                                <input  type="text" id="Describe" class="form-control" name="txtSDT" aria-describedby="helpId" placeholder="">
                                <label for="email">Email</label>
                                <input  type="text" id="Describe" class="form-control" name="txtEmail" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> 
        <!--End Modal-->
        
    </div>
</div>
@endsection