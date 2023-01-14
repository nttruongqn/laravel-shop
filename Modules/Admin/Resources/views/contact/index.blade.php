@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.contact') }}">Liên hệ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý liên hệ</h1>
        {{-- <h2><a href="/">Thêm mới </a></h2> --}}
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Email</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Thao tác</th>

            </tr>
        </thead>
        <tbody>
            @if ($contacts)
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $contact->ct_title }}</td>
                        <td>{{ $contact->ct_name }}</td>
                        <td>{{ $contact->ct_email }}</td>
                        <td>{{ $contact->ct_content }}</td>
                        <td > <a href="{{ route('admin.get.action.contact', ['handle', $contact->id]) }}"><span class="{{$contact->getHandle($contact->ct_status)['class'] }}">{{$contact->getHandle($contact->ct_status)['name'] }}</span></a></td>
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
