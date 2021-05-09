@extends('admin')
@section('admin_content')

<div class="container">
<h2 style="text-align:center;">Thêm Sản Phẩm</h2>
    <div class="row" style="width:922px;">
        <div class="col-sm-6" style="float:right;">
            <form action="{{ route('LoaiPK.update', $db->MaLoaiSP) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <!-- <label for="p_category">Danh mục</label> -->
                    <label for="title">Mã Loại</label>
                    <input type="text" value="{{ $db->MaLoaiSP}}" name="txtMaLoai" class="form-control">
                    <label for="title">Tên Loại</label>
                    <input type="text" value="{{ $db->TenLoai}}" name="txtTenLoai" class="form-control">
                    <button class="btn btn-info" type="submit">Cập nhật</button>
                </div>
            </form>
        </div>
        
    </div>
</div>


@endsection