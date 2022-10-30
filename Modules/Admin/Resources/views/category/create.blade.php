@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="padding-left: 4px;">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}" style="text-decoration: none">Trang chủ</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.get.list.category')}}" style="text-decoration: none">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tạo danh mục</li>
            </ol>
        </nav>
    </div>

    @include('admin::category.form')
@endsection
