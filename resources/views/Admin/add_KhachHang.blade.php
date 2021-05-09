@extends('admin')
@section('admin_content')

<div class="container">
<h2 style="text-align:center;">Thêm Khách Hàng</h2>
    <div class="row" style="width:922px;">
        <div class="col-sm-6" style="float:right;">
            <form action="{{ route('KhachHang.update', $db->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <!-- <label for="p_category">Danh mục</label> -->
                    <label for="title">Tên Khách Hàng</label>
                    <input type="text" value="{{ $db->TenKhachHang}}" name="txtName" class="form-control">
                    <label for="title">Ngày Sinh</label>
                    <input type="text" value="{{ $db->NgaySinh}}" name="txtNgaySinh" class="form-control">
                    <label for="title">Địa Chỉ</label>
                    <input type="text" value="{{ $db->DiaChi}}" name="txtDiaChi" class="form-control">
                    <label for="title">Số ĐT</label>
                    <input type="text" value="{{ $db->Phone}}" name="txtSDT" class="form-control">
                    <label for="title">Email</label>
                    <input type="text" value="{{ $db->Email}}" name="txtEmail" class="form-control">
                    <button class="btn btn-info" type="submit">Cập nhật</button>
                </div>
            </form>
        </div>
        
    </div>
</div>


@endsection