<nav class="menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 navbar">
                <ul>
                    <li><a href="{{ route('index') }}" class="active">Trang chủ</a></li>
                    <li>
                        <a href="">Sản phẩm <i class="fas fa-sort-down"></i></a>
                        <ul>
                            @foreach($loaiPK as $loai)
                            <li><a href="{{ route('DSPhuKien').'/'.$loai->MaLoaiSP }}">{{ $loai->TenLoai }}</a></li>
                            @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('GioiThieu') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('TinTuc') }}">Tin tức</a></li>
                        <li><a href="{{ route('LienHe') }}">Liên hệ</a></li>
                    </ul>
                </div>
                
                <div class="col-md -12 col-sm-4 Search">
                    <div class="box">
                        <div class="container-4">
                            <form action="/search" method="GET">
                                @csrf
                                <input type="search" id="search"  name="txtSearch" placeholder="Tìm kiếm..." autocomplete="off">
                                <button class="icon"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>