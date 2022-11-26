@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.rating') }}">Đánh giá</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý đáng giá</h1>
        {{-- <h2><a href="/">Thêm mới </a></h2> --}}
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên thành viên</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Rating</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if ($ratings)
                @foreach ($ratings as $key => $rating)
                    <tr>
                        <td>{{ $rating->id }}</td>
                        <td>{{ isset($rating->user->name) ? $rating->user->name: '' }}</td>
                        <td>{{ isset($rating->product->pro_name) ? $rating->product->pro_name: '' }}</td>
                        <td>{{ $rating->ra_content }}</td>
                        <td>{{ $rating->ra_number }}</td>
                        <td>
                            <a class="btn btn-danger"
                                href="/">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
