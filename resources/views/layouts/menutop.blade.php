<nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 navbar">
                        <ul>
                            <li><a href="" class="active">Trang chủ</a></li>
                            <li>
                                <a href="">Sản phẩm <i class="fas fa-sort-down"></i></a>
                                <ul>
                                @foreach($loaiPK as $loai)
                                    <li><a href="{{ route('DSPhuKien').'/'.$loai->MaLoaiSP }}">{{ $loai->TenLoai }}</a></li>
                                @endforeach
                                    <!-- <li><a href="">Pin sạc dự phòng</a></li>
                                    <li><a href="">Sạc, cáp</a></li>
                                    <li><a href="">Miếng dán màn hình</a></li>
                                    <li><a href="">Ốp lưng điện thoại</a></li>
                                    <li><a href="">Giá đỡ điện thoại</a></li>
                                    <li><a href="">Đế, móc điện thoại</a></li> -->
                                </ul>
                            </li>
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-md -12 col-sm-4 Search">
                        <div class="search-bar">
                            <div class="">
                                <form action="/search">
                                    <input type="hidden" name="type" value="product">
                                    <input type="text" name="q" placeholder="Tìm kiếm..." autocomplete="off">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>