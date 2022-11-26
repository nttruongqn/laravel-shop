@extends('layouts.app');
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ol>
        </nav>
    </div>
    <div class="cart">
        <div class="container">
            <div class="cart-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:50%">Tên sản phẩm</th>
                            <th style="width:14%" class="text-center">Giá</th>
                            <th style="width:8%" class="text-center">Số lượng</th>
                            <th style="width:18%" class="text-center">Thành tiền</th>
                            <th style="width:10%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($products))
                            @foreach ($products as $key => $product)
                            <tr>
                                    <td class="product-cart-detail">
                                        <div class="pcd-main">
                                            <img src="/assets/images/p-hot-phone/ip-11-dd.webp" alt="">
                                            <span>{{$product->name}}</span>
                                        </div>
                                    </td>
                                    <td class="text-center product-cart-price"> {{number_format($product->price,0, '' , '.')}} VNĐ
                                    </td>
                                    <td class="text-center product-cart-amount">
                                        <div class="c-amount">
                                            <input class="form-control text-center" value="{{$product->qty}}" type="number">
                                        </div>

                                    <td class="text-center product-cart-price-ex ">{{number_format($product->qty * $product->price, 0, '','.')}} VNĐ </td>
                                    <td class="text-center product-cart-price-action">
                                        <div class="cp-action">
                                            <a href="" class="cart-update">
                                                <i class="fa-solid fa-pen-to-square" class="btn btn-update"
                                                    style="color:green"></i>
                                            </a>
                                            <a href="{{ route('delete.shopping.cart',$key) }}" class="cart-delete">
                                                <i class="fa-solid fa-trash" style="color:red"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="cart-footer">
                <div class="cf-left">
                    <a href="">
                        <button class="btn-back-p btn-warning">
                            <span> Tiếp tục mua hàng</span>
                        </button>
                    </a>
                </div>
                <div class="cf-right">
                    <span class="total-price">
                        Tổng tiền: <strong> {{ Cart::subtotal() }} VNĐ</strong>
                    </span>
                    <a href="{{route('get.form.pay')}}" type="button" class="btn-payment btn-success" >
                        <span style="color:#ffffff">Thanh toán</span>
                    </a>
                </div>

            </div>
        </div>
        {{-- <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thông tin thanh toán</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sx-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Tên khách hàng</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sx-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Địa chỉ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sx-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sx-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">Lựa chọn hình thức thanh toán</label>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="form-check" checked>
                                            <label for="" class="form-check-label">Thanh toán trực tiếp</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="form-check">
                                            <label for="" class="form-check-label">Thanh toán trực tuyến</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="mf-total-price">
                            <span>Tổng tiền:</span>
                            <strong><span>{{ Cart::subtotal() }}</span></strong>
                        </div>
                        <button type="button" class="btn btn-success">Thanh toán</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
