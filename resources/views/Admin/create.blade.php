@extends('admin')
@section('admin_content')

<div class="container">
    <div class="row">
        <div class="col-sm-6" style="float:right;">
            <form action="{{ route('PhuKien.update', $db->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Mã SP</label>
                    <input type="text" value="{{ $db->MaSP}}" name="txtMaSP" class="form-control">
                    <label for="title">Tên SP</label>
                    <input type="text" value="{{ $db->TenSP}}" name="txtTenSP" class="form-control">
                    <label for="p_category">Danh mục</label>
                    <select name="txtTenLoai">
                        <option value="{{ $db->LoaiPK->MaLoaiSP}}">{{ $db->LoaiPK->TenLoai}}</option>
                        @foreach($LoaiPK as $r)
                        <option value="">{{ $r->TenLoai }}</option>
                        @endforeach
                    </select><br>

                    <label for="desc">Đơn vị</label>
                    <input type="text" name="txtDonVi" id="" cols="30" value="{{ $db->DonVi}}" rows="10" placeholder="Đơn vị" class="form-control">
                    
                    <label for="desc">Mô tả</label>
                    <textarea name="txtMoTa" id="" cols="30" rows="10" placeholder="Mô tả" class="form-control">{{ $db->MoTa}}</textarea>
                   
                    <label for="image">Hình ảnh </label>
                    <input type="file" value="" name="fileImg" class="form-control">
                    
                    <label for="price">Đơn giá</label>
                    <input type="text" value="{{ $db->DonGia}}" name="txtDonGia" class="form-control">
                    <button class="btn btn-info" type="submit">Cập nhật</button>
                </div>
            </form>
        </div>
        
    </div>
</div>


@endsection