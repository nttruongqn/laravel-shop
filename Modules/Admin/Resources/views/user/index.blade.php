@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.user') }}">Thành viên</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý thành viên</h1>
        <h2><a href="/">Thêm mới </a></h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên thành viên</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if ($users)
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td></td>

                        <td>
                            <a class="btn btn-success" href="/"k>Sửa</a>
                            <a class="btn btn-danger"
                                href="/">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
