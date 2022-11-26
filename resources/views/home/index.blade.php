@extends('layouts.app')
@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <div class="banner-container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="banner-left">
                            <ul class="list-image-banner">
                                <li class="image-banner-item">
                                    <a href="" class="image-banner-item">
                                        <img src="assets/images/banner/banner-chinh-1.jpg" alt="">
                                    </a>
                                </li>
                                <li class="image-banner-item">
                                    <a href="" class="image-banner-item">
                                        <img src="assets/images/banner/banner-chinh-2.png" alt="">
                                    </a>
                                </li>
                                <li class="image-banner-item">
                                    <a href="" class="image-banner-item">
                                        <img src="assets/images/banner/banner-chinh-3.png" alt="">
                                    </a>
                                </li>
                            </ul>
                            <ul class="banner-left-list-news">
                                <li class="blln-item">
                                    <a href="" class="blln-link">
                                        <span>Samsung S20</span> <br>
                                        <span>Giảm 10%</span>
                                    </a>
                                </li>
                                <li class="blln-item">
                                    <a href="" class="blln-link">
                                        <span>Samsung S20</span> <br>
                                        <span>Giảm 10%</span>
                                    </a>
                                </li>
                                <li class="blln-item">
                                    <a href="" class="blln-link">
                                        <span>Samsung S20</span> <br>
                                        <span>Giảm 10%</span>
                                    </a>
                                </li>
                                <li class="blln-item">
                                    <a href="" class="blln-link">
                                        <span>Samsung S20</span> <br>
                                        <span>Giảm 10%</span>
                                    </a>
                                </li>
                                <li class="blln-item">
                                    <a href="" class="blln-link">
                                        <span>Samsung S20</span> <br>
                                        <span>Giảm 10%</span>
                                    </a>
                                </li>


                            </ul>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="banner-right">
                            <div class="banner-right-top">
                                <div class="banner-right-top-news">
                                    <a href="">
                                        <span>TIN CÔNG NGHỆ</span>
                                    </a>
                                </div>
                            </div>
                            <div class="banner-right-list">
                                <div class="banner-right-item">
                                    <a href="" class="banner-right-link">
                                        <img src="assets/images/banner/banner-phu-1.png" alt="">
                                    </a>
                                </div>
                                <div class="banner-right-item">
                                    <a href="" class="banner-right-link">
                                        <img src="assets/images/banner/banner-phu-2.png" alt="">
                                    </a>
                                </div>
                                <div class="banner-right-item">
                                    <a href="" class="banner-right-link">
                                        <img src="assets/images/banner/banner-phu-3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner-extra -->
    <div class="banner-extra b-f">
        <div class="container">
            <a href="">
                <img src="assets/images/banner/banner-extra-1.png" alt="">
            </a>
        </div>
    </div>

    <!-- category -->
    <div class="product-category">
        <div class="container">
            <div class="p-c-container">
                <div class="p-c-list">
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <div class="p-c-list-item">
                                <a href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}"
                                    class="p-c-list-link">
                                    <img src="{{ pare_url_file($category->c_avatar) }}" alt="">
                                    <span>{{ $category->c_name }}</span>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>

    <!-- banner-extra -->
    <div class="banner-extra">
        <div class="container">
            <a href="">
                <img src="assets/images/banner/banner-extra-2.webp" alt="">
            </a>
        </div>
    </div>

    <!-- product-hot-sales   -->
    <div class="product-hot-sale">
        <div class="container">
            <div class="product-hot-sale-container">
                <div class="product-hot-sale-title">
                    <div class="pdst-left">
                        <i class="icon-title-hot-sale">
                        </i>
                        <span>SẢN PHẨM HOT</span>
                    </div>
                    <div class="pdst-right">
                        <a href="pdst-r-link">Xem tất cả</a>
                    </div>

                </div>
                <div class="product-hot-sale-main">
                    <div class="p-h-s-m-list">
                        @if (isset($hotProducts))
                            @foreach ($hotProducts as $hotProduct)
                                <div class="p-h-s-m-item">
                                    <a href="{{ route('get.detail.product', [$hotProduct->pro_slug, $hotProduct->id]) }}"
                                        class="p-h-s-m-link">
                                        <img src="{{ pare_url_file($hotProduct->pro_avatar) }}"" alt="">
                                        <span class="phsm-product-title">
                                            {{ $hotProduct->pro_name }}
                                        </span>
                                        <div class="phsm-product-price">
                                            <div class="pshm-pp-new-price">
                                                <span>{{ number_format($hotProduct->pro_price, 0, '', '.') }} đ</span>
                                            </div>
                                            <!-- <div class="pshm-pp-old-price">
                                                    <span>36.990.000 đ</span>
                                                </div> -->
                                        </div>
                                        <div class="phsm-product-vote">
                                            <span>4</span>
                                            <span></span><i class="fa-solid fa-star"
                                                style="color: ffd400; font-size: 12px; padding-left:4px ;"></i>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product-hot-phone -->
    <div class="product-main product-hot-phone">
        <div class="container">
            <div class="product-main-container">
                <div class="product-main-title">
                    <div class="pmt-left">
                        <span>ĐIỆN THOẠI NỔI BẬT</span>
                    </div>
                    <div class="pmt-right">
                        <a href="" class="pmt-right-link">Xem tất cả</a>
                    </div>

                </div>
                <div class="product-main-content">
                    <div class="pmc-list">
                        @if ($phoneProducts)
                            @foreach ($phoneProducts as $phoneProduct)
                                <div class="pmc-item">
                                    <div class="pmc-link">
                                        <a
                                            href="{{ route('get.detail.product', [$phoneProduct->pro_slug, $phoneProduct->id]) }}">
                                            <img src="{{ pare_url_file($phoneProduct->pro_avatar) }}" alt="">
                                            <div class="pmc-product-name">
                                                <span>{{ $phoneProduct->pro_name }}</span>
                                            </div>
                                            <div class="pmc-product-price">
                                                <div class="pmc-product-new-price">
                                                    <span>{{ number_format($phoneProduct->pro_price, 0, '', '.') }}
                                                        đ</span>
                                                </div>
                                                <div class="pmc-product-old-price">
                                                    {{-- <span>14.399.000đ</span> --}}
                                                </div>

                                            </div>
                                            <!-- <div class="pmc-product-desc">
                                        </div> -->
                                        </a>

                                        <div class="pmc-product-payment">
                                            <a href="{{ route('add.shopping.cart', $phoneProduct->id) }}"
                                                class="ppp-link">
                                                <span>MUA NGAY</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product-hot-latop -->
    <div class="product-main product-hot-laptop">
        <div class="container">
            <div class="product-main-container">
                <div class="product-main-title">
                    <div class="pmt-left">
                        <span>LAPTOP NỔI BẬT</span>
                    </div>
                    <div class="pmt-right">
                        <a href="" class="pmt-right-link">Xem tất cả</a>
                    </div>
                </div>
                <div class="product-main-content">
                    <div class="pmc-list">
                        @if ($laptopProducts)
                            @foreach ($laptopProducts as $laptopProduct)
                            <div class="pmc-item">
                                <div class="pmc-link">
                                    <a
                                        href="{{ route('get.detail.product', [$laptopProduct->pro_slug, $laptopProduct->id]) }}">
                                        <img src="{{ pare_url_file($laptopProduct->pro_avatar) }}" alt="">
                                        <div class="pmc-product-name">
                                            <span>{{ $laptopProduct->pro_name }}</span>
                                        </div>
                                        <div class="pmc-product-price">
                                            <div class="pmc-product-new-price">
                                                <span>{{ number_format($laptopProduct->pro_price, 0, '', '.') }}
                                                    đ</span>
                                            </div>
                                            <div class="pmc-product-old-price">
                                                {{-- <span>14.399.000đ</span> --}}
                                            </div>

                                        </div>
                                        <!-- <div class="pmc-product-desc">
                                    </div> -->
                                    </a>

                                    <div class="pmc-product-payment">
                                        <a href="{{ route('add.shopping.cart', $laptopProduct->id) }}"
                                            class="ppp-link">
                                            <span>MUA NGAY</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
