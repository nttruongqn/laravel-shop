@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
        </ol>
    </nav>
</div>


    <div class="col-lg-12 tm-a">
        <h1 class="title-manager">Quản lý danh mục</h1>
        <h2><a href="{{ route('admin.get.create.category') }}">Thêm mới </a></h2>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Danh Mục</th>
                <th scope="col">Icon</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if ($categories)
                @foreach ($categories as $key => $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->c_name }}</td>
                        <td>{{ $category->c_icon }}</td>
                        <td><img src="{{ pare_url_file($category->c_avatar) }}" alt=""
                                style="width: 30px; height: 30px"></td>
                        <td><a href="{{ route('admin.get.action.category', ['active', $category->id]) }}"> <span
                                    class="{{ $category->getStatus($category->c_active)['class'] }}">
                                    {{ $category->getStatus($category->c_active)['name'] }}</span></a></td>
                        <td>
                            <a class="btn btn-success"
                                href="{{ route('admin.get.edit.category', $category->id) }}"k>Sửa</a>
                            <a class="btn btn-danger"
                                href="{{ route('admin.get.action.category', ['delete', $category->id]) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
