@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.product') }}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý Sản phẩm</h1>
        <h2><a href="{{ route('admin.get.create.product') }}">Thêm mới </a></h2>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" placeholder="Tên sản phẩm..."
                        value="{{ \Request::get('name') }}">
                </div>
                <div class="form-group">
                    <select name="cate" id="" class="form-control">
                        <option value="">Danh mục</option>
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ \Request::get('cate') == $category->id ? 'selected' : '' }}>
                                    {{ $category->c_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-dark"> <i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Loại sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Nổi bật</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($products))
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->pro_name }}
                            <ul class="ex-pl">
                                <li>
                                    <span>
                                        <i class="fas fas-dollar-sign"></i>
                                    </span>
                                    <span>{{ number_format($product->pro_price, 0, '', '.') }} (đ)</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="fas fas-dollar-sign"></i>
                                    </span>
                                    <span>{{ $product->pro_sale }} (%)</span>
                                </li>
                            </ul>
                        </td>
                        <td>{{ isset($product->category->c_name) ? $product->category->c_name : '' }}</td>
                        <td><img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive"
                                style="width:40px;height:40px"></td>
                        <td><a href="{{ route('admin.get.action.product', ['activate', $product->id]) }}">
                                <span
                                    class="{{ $product->getStatus($product->pro_active)['class'] }}">{{ $product->getStatus($product->pro_active)['name'] }}</span>
                            </a></td>
                        <td>
                            <a href="{{ route('admin.get.action.product', ['hot', $product->id]) }}">
                                <span
                                    class="{{ $product->getHot($product->pro_hot)['class'] }}">{{ $product->getHot($product->pro_hot)['name'] }}</span>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.get.update.product', $product->id) }}">Sửa</a>
                            <a class="btn btn-danger"
                                href="{{ route('admin.get.action.product', ['delete', $product->id]) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>

@endsection
