<div class="header">
    <div class="header-container container">
        <div class="header-left col-sm-12 col-md-6">
            <div class="header-left-container">
                <div class="header-three-line">
                    &#9776;
                </div>
                <div class="header-left-logo">
                    <span class="header-three-line" style="color: #fff;font-size: 24px; display: none;">&#9776;</span>
                    <a class="hl-logo-link" href="">
                        <span>NTTQN</span>
                    </a>
                </div>
                <div class="header-left-search">
                    <input type="text">
                    <button class="hl-search-button"><i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-right col-6">
            <div class="header-right-container">
                <ul class="header-right-list">
                    <li class="header-right-item">
                        <a href="" class="header-right-link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="header-right-item" id="extra-header-product">
                        <div href="" class="header-right-link">
                            Sản phẩm
                        </div>
                    </li>
                    <div class="extra-header-product">
                        <div class="hpe-list-arrow">
                        </div>
                        <ul class="hpe-list">
                            @if (isset($categories))
                                @foreach ($categories as $category)
                                    <li class="hpe-list-item">
                                        <a href="{{route('get.list.product',[$category->c_slug,$category->id])}}" class="hpe-item-link">
                                            <span>{{ $category->c_name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <li class="header-right-item">
                        <a href="" class="header-right-link">
                            Tin tức
                        </a>
                    </li>
                    <li class="header-right-item">
                        <a href="" class="header-right-link">
                            Liên hệ
                        </a>
                    </li>
                    <li class="header-right-item">
                        <a href="" class="header-right-link">
                            Tài khoản
                        </a>
                    </li>
                </ul>
                <div class="header-right-cart">
                    <a href="" class="hr-cart-link">
                        <img src="assets/images/icon/icon-cart.png" alt="">
                    </a>
                </div>

            </div>

        </div>
        <div class="header-extra">
            <div class="he-top">
                <div class="header-three-line">
                    &#9776;
                </div>
                <div class="header-left-logo">
                    <span class="header-three-line" style="color: #fff;font-size: 24px; display: none;">&#9776;</span>
                    <a class="hl-logo-link" href="">
                        <span>NTTQN</span>
                    </a>
                </div>
            </div>
            <div class="he-bottom">
                <ul class="he-menu-list">
                    <li class="he-menu-item">
                        <a href="" class="he-menu-link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="he-menu-item product-arrow">
                        <div href="" class="he-menu-link">
                            Sản phẩm
                        </div>
                        <div class="he-menu-item-arrow">

                        </div>
                    </li>
                    <ul class="he-menu-product-list">
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <li class="he-menu-item product">
                                    <a href="{{route('get.list.product',[$category->c_slug,$category->id])}}" class="he-menu-link">
                                        {{ $category->c_name }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <li class="he-menu-item">
                        <a href="" class="he-menu-link">
                            Tin tức
                        </a>
                    </li>
                    <li class="he-menu-item">
                        <a href="" class="he-menu-link">
                            Giới thiệu
                        </a>
                    </li>
                    <li class="he-menu-item">
                        <a href="" class="he-menu-link">
                            Tài khoản
                        </a>
                    </li>
                    <li class="he-menu-item">
                        <a href="" class="he-menu-link">
                            Giỏ hàng
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>

</div>
