@section('title')
    Chi tiết sản phẩm
@endsection
@section('cssfile')
    <link rel="stylesheet" href="{{ asset('assets/css/product-detail.css') }}">
@endsection

@extends('layouts.app')
@section('content')
<style>
    .pdmr-product-rating svg.active{
        color: #ff9705 !important;
    }
</style>
    @if (@isset($productDetail))
        @foreach ($productDetail as $item)
            <div class="container b-c">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('get.list.product', [$item->c_slug, $item->pro_category_id]) }}">{{ $item->c_name }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Iphone 11</li>
                    </ol>
                </nav>
            </div>

            <div class="container">
                <div class="product-detail-container">
                    <div class="pd-product-title">
                        <h5>{{ $item->pro_name }} </h5>

                    </div>
                    <div class="pd-main">
                        <div class="pd-main-left">
                            <div class="pdml-product-image">
                                <img src="{{ asset(pare_url_file($item->pro_avatar)) }}" alt="">
                            </div>
                        </div>
                        <div class="pd-main-right">
                            <h5 class="pdmr-product-name">
                                {{ $item->pro_name }}
                            </h5>
                            <div class="pdmr-product-rating">
                                <?php $age = 0;
                                if ($item->pro_total_rating) {
                                    $age = round($item->pro_total_number / $item->pro_total_rating, 2);
                                }
                                ?>
                                <span>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fa fa-star {{ $i <= $age ? 'active' : '' }}" style="color: #999"></i>
                                    @endfor
                                </span>
                            </div>
                            <span class="pdmr-product-brand">
                                <strong>Nhãn hiệu: </strong> Apple
                            </span>
                            <span class="pdmr-product-country">
                                <strong>Xuất xứ: </strong> Trung Quốc
                            </span>
                            <div class="pdmr-product-desc">
                                <span class="pdmr-product-desc-title"> <strong>Mô tả sản phẩm </strong></span>
                                <br>
                                <span>Iphone 11 được thiết kế siêu cấp vip pro đến từ thương hiệu Apple nổi tiếng</span>
                            </div>
                            <span class="pdmr-product-price"> {{ number_format($item->pro_price, 0, '', '.') }} đ</span>
                            <a href="{{ route('add.shopping.cart', $item->id) }}" class="pdmr-product-payment">
                                <span>MUA NGAY</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="pd-main-extra-wrapper">
                <div class="container">
                    <div class="pd-desc-container">
                        <div class="pd-desc-left">
                            <h5>Đặc điểm nổi bật của sản phẩm</h5>
                            {{ $item->pro_content }}
                        </div>
                        <div class="pd-desc-right">
                            <h5>Thông số kĩ thuật</h5>
                            <div class="pd-d-r-table">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>
                                        <tr>
                                            <td>Ram</td>
                                            <td>4GB</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pd-review">
                        <div class="pd-review-container">
                            <div class="col-12 pd-review-content">
                                <div class="component-rating">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="rating-item">
                                                <div class="rating-item-content" style="position: relative">
                                                    <span style="display: block;margin:0 auto;">
                                                        <i class="fa fa-star"
                                                            style="  color: #efb140!important; font-size: 100px;">
                                                        </i>
                                                    </span>
                                                    <b
                                                        style="position: absolute; left: 34px; color:#ffffff;
                                                    top: 28px; font-size: 30px">2.5
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="list-rating">
                                                @for ($i = 1; $i < 5; $i++)
                                                    <div class="item-rating">
                                                        <div
                                                            style=" width:10%; display: flex; align-items:center; justify-content: center">
                                                            <span
                                                                style="font-size: 14px; margin-right: 2px;">{{ $i }}</span>
                                                            <span><i class="fa fa-star"
                                                                    style="color: #efb140;font-size: 14px;"></i></span>
                                                        </div>
                                                        <div class="percent-rating">
                                                            <span
                                                                style="width:100%; height:10px; display: block; border:1px solid #dedede; border-radius: 4px;"><b
                                                                    style="width: 30%;background-color: #f25800;display: block;height: 100%; border-top-right-radius: 4px; border-bottom-right-radius: 4px;"></b></span>
                                                        </div>
                                                        <div class="amount-rating">
                                                            10 đánh giá
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="send-rate" style="cursor: pointer">
                                                <span>Gửi đánh giá của bạn</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose-rating hide" style="margin: 10px 0">
                                    <span>Chọn đánh giá của bạn</span>
                                    <div class="list-star" style="display: inline-block">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa fa-star" data-key="{{ $i }}"></i>
                                        @endfor
                                    </div>
                                    <span class="list-text ">Tốt</span>
                                    <input type="hidden" value="" class="number-rating">
                                    <div class="text-rating">
                                        <textarea name="" id="ra-content" cols="30" rows="10" class="t-r-input"></textarea>
                                    </div>
                                    <div class="btn-send-text-rating">
                                        <a class='bstr-link' href="{{ route('post.rating.product', $item->id) }}">
                                            <span>Gửi đánh giá</span>
                                        </a>
                                    </div>
                                </div>

                                <h5>Đánh giá người dùng</h5>
                                <ul class="pd-r-c-list">
                                    <li class="pd-r-c-item">
                                        <img src="/assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                            alt="">
                                        <div class="pdrc-item-main">
                                            <h6>chú bé tèo</h6>
                                            <span>Tuyệt vời quá !!</span>

                                        </div>
                                    </li>
                                    <li class="pd-r-c-item">
                                        <img src="/assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                            alt="">
                                        <div class="pdrc-item-main">
                                            <h6>chú bé tèo</h6>
                                            <span>Tuyệt vời quá !!</span>

                                        </div>
                                    </li>
                                    <li class="pd-r-c-item">
                                        <img src="/assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                            alt="">
                                        <div class="pdrc-item-main">
                                            <h6>chú bé tèo</h6>
                                            <span>Tuyệt vời quá !!</span>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="pd-related-product">
                        <h5>Sản phẩm liên quan</h5>
                        <div class="list-related-product">
                            <div class="lrp-item">
                                <a class="lrp-item-img" href=""><img
                                        src="assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                        alt=""></a>
                                <a href=""><span class="lrp-item-name">Iphone 11 64 gb siêu cấp </span></a>
                                <span class="lrp-item-price">11.111.111 đ</span>
                            </div>
                            <div class="lrp-item">
                                <a class="lrp-item-img" href=""><img
                                        src="assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                        alt=""></a>
                                <a href=""><span class="lrp-item-name">Iphone 11 64 gb siêu cấp </span></a>
                                <span class="lrp-item-price">11.111.111 đ</span>
                            </div>
                            <div class="lrp-item">
                                <a class="lrp-item-img" href=""><img
                                        src="assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                        alt=""></a>
                                <a href=""><span class="lrp-item-name">Iphone 11 64 gb siêu cấp </span></a>
                                <span class="lrp-item-price">11.111.111 đ</span>
                            </div>
                            <div class="lrp-item">
                                <a class="lrp-item-img" href=""><img
                                        src="assets/images/p-hot-phone/iphone-13-bh-2nam-dac-quyen.webp"
                                        alt=""></a>
                                <a href=""><span class="lrp-item-name">Iphone 11 64 gb siêu cấp </span></a>
                                <span class="lrp-item-price">11.111.111 đ</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
