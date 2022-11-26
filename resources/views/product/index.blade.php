@section('title')
    Sản phẩm
@endsection
@section('cssfile')
    <link rel="stylesheet" href="{{ asset('assets/css/product-list.css') }}">
@endsection

@extends('layouts.app')
@section('content')
    <div class="container b-c">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $category->c_name }}
                </li>
            </ol>
        </nav>
    </div>

    <div class="main-product-list">
        <div class="container mlp-container">
            <div class="mlp-filter">
                <div class="mlpf-brand">
                    <h6 class="mlpf-brand-title">Hãng sản xuất</h6>
                    <div class="mlf-brand-checkbox">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Oppo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Oppo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Iphone
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mlpf-price">
                    <h6 class="mlpf-price-title">
                        Mức giá
                    </h6>
                    <div class="mlpf-price-checkbox">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    1 Triệu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Từ 1 -5 Triêu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Từ 5 -50 Triêu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Từ 50 -500 Triêu
                                </label>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="mlp-list-product">
                <div class="mlp-list-product-container">
                    <div class="mlp-lp-title">
                        <h4>{{ $category->c_name }}
                        </h4>
                    </div>
                    <div class="mlp-lp-content">
                        @if (isset($products))
                            @foreach ($products as $product)
                                <div class="mlp-lp-item">
                                    <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                        <img src="{{ pare_url_file($product->pro_avatar) }}" alt="">
                                        <div class="mlp-i-name">
                                            {{ $product->pro_name }}
                                        </div>
                                    </a>
                                    <div class="mlp-i-price">
                                        <div class="mlp-i-c-price">
                                            {{ number_format($product->pro_price, 0, '', '.') }} đ
                                        </div>
                                        <!-- <div class="mlp-i-o-price">
                                                2000000 đ
                                            </div> -->
                                    </div>
                                    <div class="mlp-i-payment">
                                        <a href="{{ route('add.shopping.cart', $product->id) }}">
                                            <span>MUA NGAY</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>

                    <div class="pagination-mlp">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Kế tiếp</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
