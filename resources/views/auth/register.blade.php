@section('title')
    Đăng ký
@endsection
@section('cssfile')
    <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">
@endsection
@extends('layouts.app')

@section('content')
<div class="container bc"">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
        </ol>
    </nav>
</div>

<div class="auth-main">
    <div class="container">
        <div class="auth-container">
            <div class="auth-form-container f-r">
                <h4>Đăng ký tài khoản</h4>
                <form method="post" class="form" action="" >
                    @csrf
                    <div class="form-group">
                        <label for="username">Họ tên</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label for="re-password">Nhập lại mật khẩu</label>
                        <input type="password" name="re-password" class="form-control">
                    </div> --}}
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                            <input type="submit" class="btn btn-auth" value="Đăng ký"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
