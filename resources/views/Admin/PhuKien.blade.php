@extends("admin")
@section('admin_content')
<div id="page-wrapper" style="min-height: 223px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Danh sách sản phẩm
                </h1>
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
                        <form action="/Admin/User" method="get">                    
                            <div class="row form-group">
                                <div class="col-lg-12">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="searchString">
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
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Mã loại</th>
                                        <th>Đơn vị</th>
                                        <th>Mô tả</th>
                                        <th>Hình ảnh</th>
                                        <th>Đơn giá</th>
                                        <th>TT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($db as $r)
                                    <tr id="row_21">
                                        <td>{{$tt++}}</td>
                                        <td>{{$r->MaSP}}</td>
                                        <td>{{$r->TenSP }}</td>
                                        <td>{{$r->MaLoai }}</td>
                                        <td>{{$r->DonVi }}</td>
                                        <td>{{$r->MoTa}}</td>
                                        <td><img src="{{asset('img'.'/'.$r->HinhAnh)}}" alt=""></td>
                                        <td>{{ number_format($r->DonGia) }} đ</td>
                                        <td>
                                            <!-- <a href="{{ route('PhuKien.edit', $r->id) }}" data-toggle="modal" data-target="#modelIds">Sửa</a> -->
    
                                            <a href="{{ route('PhuKien.edit', $r->id) }}"><button  type="submit" ><img class="action" src="{{asset('assets/icon-edit.svg')}}" alt=""></button></a>
                                            <form role="form" action="{{ route('PhuKien.destroy', $r->id) }}" method="post">
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
        
        <form role="form" action="{{ route('PhuKien.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">THÊM MỚI SẢN PHẨM</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                
                                <label for="ma">Mã sản phẩm</label>
                                <input  type="text" id="ma" class="form-control" name="txtMaSP" aria-describedby="helpId" placeholder="">
                                <label for="name">Tên sản phẩm</label>
                                <input  type="text" id="name" class="form-control" name="txtTenSP" aria-describedby="helpId" placeholder="">
                                <label for="">Tên loại</label>
                                <select  class="form-control" name="txtTenLoai" id="">
                                    <?php
                                    use App\Models\LoaiPK;
                                    $db = LoaiPK::all();
                                    ?>
                                    @foreach($db as $r)
                                    <option value="{{ $r-> MaLoaiSP }}">{{ $r->TenLoai}}</option>
                                    @endforeach
                                </select>
                                <label for="Unit">Đơn vị</label>
                                <input  type="text" id="Unit" class="form-control" name="txtDonVi" aria-describedby="helpId" placeholder="">
                                <label for="Describe">Mô tả</label>
                                <input  type="text" id="Describe" class="form-control" name="txtMoTa" aria-describedby="helpId" placeholder="">
                                <label for="image">Hình ảnh</label>
                                <input  multiple="multiple" type="file" id="image" class="form-control" name="fileImg" ngf-select="UploadFiles($files)">
                                <label for="price">Đơn giá</label>
                                <input  type="number" id="price" class="form-control" name="txtDonGia" aria-describedby="helpId" placeholder="">
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