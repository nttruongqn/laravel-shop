@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.product') }}">Bài viết</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý bài viết</h1>
        <h2><a href="{{ route('admin.get.create.article') }}">Thêm mới </a></h2>
    </div>

    {{-- <div class="row">
        <div class="col-sm-6">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" placeholder="Tên sản phẩm..."
                        value="{{\Request::get('name')}}">
                </div>
                <div class="form-group">
                    <select name="cate" id="" class="form-control">
                        <option value="">Danh mục</option>
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{\Request::get('cate') == $category->id ? 'selected': ''}}>
                                    {{ $category->c_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-dark"> <i class="fa fa-search"></i></button>
            </form>
        </div>
    </div> --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($articles))
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->a_name }}</td>
                        <td><img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive"
                                style="width:40px;height:40px">
                        </td>
                        <td>{{ $article->a_description }}</td>
                        <td>
                            <a href="{{ route('admin.get.action.article', ['status', $article->id]) }}">
                                <span
                                    class="{{ $article->getStatus($article->a_active)['class'] }}">{{ $article->getStatus($article->a_active)['name'] }}</span>
                            </a>
                        </td>
                        {{-- <td>
                            <a href="{{ route('admin.get.action.product', ['hot', $article->id]) }}">
                                <span
                                    class="{{ $article->getHot($article->a_hot)['class'] }}">{{ $article->getHot($article->a_hot)['name'] }}</span>
                            </a>
                        </td> --}}
                        <td>{{ $article->created_at }}</td>
                        <td>
                            <a class="btn btn-success"
                                href="{{ route('admin.get.update.article', $article->id) }}"k>Sửa</a>
                            <a class="btn btn-danger"
                                href="{{ route('admin.get.action.article', ['delete', $article->id]) }}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>

@endsection
