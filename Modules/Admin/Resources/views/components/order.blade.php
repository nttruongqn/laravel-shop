@if($orders)
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
                    @if (isset($orders))
                        @foreach ($orders as $key => $order)
                        <tr>
                                <td class="product-cart-detail">
                                    <div class="pcd-main">
                                        <img src="{{ isset($order->product->pro_avatar) ? pare_url_file($order->product->pro_avatar) : '' }}" alt="" style="width: 50px;height:50px;">
                                        <span>{{ isset($order->product->pro_name) ? $order->product->pro_name : '' }}</span>
                                    </div>
                                </td>
                                <td class="text-center product-cart-price"> {{number_format($order->or_price,0, '' , '.')}} VNĐ
                                </td>
                                <td class="text-center product-cart-amount">
                                    <div class="c-amount">
                                        <input class="form-control text-center" value="{{$order->or_qty}}" type="number">
                                    </div>

                                <td class="text-center product-cart-price-ex ">{{number_format($order->or_qty * $order->or_price, 0, '','.')}} VNĐ </td>
                                <td class="text-center product-cart-price-action">
                                    <div class="cp-action">
                                        <a href="{{ route('delete.shopping.cart',$key) }}" class="cart-delete" style="text-decoration: none">
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

    </div>
</div>
@endif
