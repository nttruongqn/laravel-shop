@extends('layouts.app')
@section('content')
    <div class="container wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
            </ol>
        </nav>
        <div class="container pay-container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <form action="" method="post">
                        @csrf()
                        <div class="pay-left-header d-flex align-items-center">
                            <span>Địa chỉ</span>
                        </div>
                        <div class="pay-left-container">
                            <div class="form-group">
                                <label for="">Họ tên</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email"
                                    value="{{ get_data_user('web', 'email') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone"
                                    value="{{ get_data_user('web', 'phone') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Ghi chú</label>
                                <textarea type="text" class="form-control" name="note" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="pf-payment btn-success" value="Xác nhận thanh toán">
                    </form>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="pay-right-header d-flex align-items-center">
                        <span>Danh sách sản phẩm</span>
                        <a href="" class="prh-edit-pay">
                            <span>Cập nhật</span>
                        </a>
                    </div>
                    <div class="pay-right-container">
                        <div class="pr-product-list">
                            @foreach ($products as $product)
                            @endforeach
                            <div class="pr-product-item d-flex">
                                <div class="prdi-left">
                                    <img src="{{ pare_url_file($product->options->avatar) }}" alt="">
                                </div>
                                <div class="prdi-right d-flex">
                                    <div class="prdi-r-l d-flex flex-column">
                                        <div class="prl-item-name">
                                            <span>{{ $product->name }}</span>
                                        </div>
                                        <div class="prl-item-qty">
                                            <span>Số lượng x {{ $product->qty }} </span>
                                        </div>
                                    </div>
                                    <div class="prdi-r-r">
                                        <div class="prr-item-price">
                                            <span>{{ number_format($product->price, 0, '', '.') }} VNĐ</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="pr-product-price-total d-flex flex-column">
                                {{-- <div class="pppt-subtotal">
                                <span>Tổng tiền </span>
                                <span>50.000.000 VNĐ</span>
                            </div> --}}
                                <div class="pppt-order-total d-flex">
                                    <span>Tổng tiền </span>
                                    <span>{{ Cart::subtotal() }}</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endsection
