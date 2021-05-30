@extends('layout')

@section('content')
<section class="container GioHang">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
            <article>
                <h4 class="title">Giỏ hàng</h4>
            </article>
            <article>
                <form action="" method="GET/POST">
                    @php 
                    $tt = 1;
                    @endphp
                    <table cellspacing = 5 cellpadding = 5>
                        <thead>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh SP</th>
                            <th>Giá(đ)</th>
                            <th>Thành Tiền(đ)</th>
                            <th>Số lượng</th>
                            <th>&nbsp;</th>
                        </thead>
                        @foreach($cart as $key)
                        <tr>
                            <td class="text-center" style="color:black;">{{$tt++}}</td>
                            <td class="item" style="text-align:left;"><a href="">{{$key->name}}</a></td>
                            <td class="images"><a href=""><img src="{{ asset('img'.'/'.$key->options->img) }}" alt=""></a></td>
                            <td class="price" id="price" style="text-align:right;">{{ number_format($key->price) }}</td>
                            <td class="price" id="price" style="text-align:right;">
                                {{ number_format($key->price * $key->qty) }}
                            </td>
                            <td class="qty">
                                <input type="number" name="qty" id="qty" value="{{ $key->qty }}" placeholder="1" class="quote" min="1" max="100">                                </td>
                                
                                <td>
                                    <form role="form" action="{{ route('cart.destroy', $key->rowId) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button  type="submit" onclick="return confirm('Bạn chắc chắn xóa sản phẩm?')">Xóa</button>   
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach
                        </table>
                        <table >
                        <tr>
                            <h3 style="text-align:right;">Tổng cộng</h3>
                            <h3 style="text-align:right; color:cadetblue;">{{ Cart::subtotal(0,3).' '.'đ' }}</h3>
                        </tr>
                        </table>
                     
                        <div class="buttons">
                            <button type="submit" id="checkout" class="button-default" name="checkout" value="" title="Thanh toán">
                                <a href="{{ route('checkout') }}"> Thanh toán &nbsp;&nbsp; </a>
                                </i>
                            </button>
                            <button type="submit" id="update-cart"  class="button-default" name="update" value="">
                                <a href="" title="Quay lại"></i>&nbsp;&nbsp;  Quay lại </a>
                            </button>
                        </div>
                    </form>
                </article>
            </div>
        </div>
        
        <!-- SCROLL TO TOP -->
        <div class="Scroll">
            <a href="#top" id="scrollToTop" title="Lên trên" style="display: block;"  onclick="scrollToTop();return false">
                <i class="fas fa-arrow-alt-circle-up"></i>
            </a>
        </div>
    </section>
    
    <div class="clear-fix"></div>
    @endsection