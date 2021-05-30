<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link rel="stylesheet" href="{{asset('CSS/pay.css')}}"> -->
<!------ Include the above in your HEAD tag ---------->

@extends('layout')

@section('content')


<div class="about_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10  text-center text-lg-left wow slideInUp" data-wow-duration="2s">
                <h1 class="heading">Đặt hàng</h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Danh sách sản phẩm <div class="pull-right"><small><a class="afix-1" href="{{ route('cart.index') }}">Cập nhật</a></small></div>
                        </div>
                        
                        <div class="panel-body">
                            @foreach($cart as $key)
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="{{ asset('img'.'/'.$key->options->img) }}" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">{{ $key->name }}</div>
                                    <div class="col-xs-12"><small>Số lượng x <span>{{ $key->qty }}</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6>{{ number_format($key->price)." "."VND"}}</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            @endforeach
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng phụ</strong>
                                    <div class="pull-right">{{ Cart::subtotal(0,3)." "."VND" }}</div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Giao hàng</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng Tiền</strong>
                                    <div class="pull-right">{{ Cart::subtotal(0,3)." "."VND" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                            @if(count($errors)>0)
                            <div class="alert alert-danger" style="color: red">
                                @foreach($errors->all() as $error)
                                {{$error}}
                                @endforeach
                            </div>
                            @endif
                            <form action="{{ route('checkout') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" name="txtid" class="form-control" value="{{ Auth::id() }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Tên khách hàng:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="txtName" class="form-control" value="" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Ngày sinh:</strong></div>
                                    <div class="col-md-12">
                                        <input type="date" name="txtDate" class="form-control" value="" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ nhận:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="txtad" class="form-control" value="" required />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                    <div class="col-md-12"><input type="text" name="txtPhone" class="form-control" value="" required /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email:</strong></div>
                                    <div class="col-md-12"><input type="email" name="txtEmail" class="form-control" value="{{ Auth::user()->username }}" required /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="txtNote" id="" rows="3" required ></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="form-control btn btn-success" value="">Đặt hàng</button>
                            </form>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
            </form>
        </div>
        <div class="row cart-footer">
            
        </div>
    </div>
</div>

@endsection