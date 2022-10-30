@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb" style="margin: 10px 0; background-color: #cccccc">
        <ol class="breadcrumb" style="padding-left: 4px;">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}" style="text-decoration: none">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.get.edit.category')}}" style="text-decoration: none">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tạo danh mục</li>
        </ol>
    </nav>
    {{-- @include('admin::category.form') --}}
@endsection
