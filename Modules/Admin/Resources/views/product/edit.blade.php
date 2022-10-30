@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb" style="margin: 10px 0; background-color: #cccccc">
        <ol class="breadcrumb" style="padding-left: 4px;">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}" style="text-decoration: none">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.get.list.product')}}" style="text-decoration: none">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
        </ol>
    </nav>
    @include('admin::product.form')
@endsection
