@section('title')
    Đăng nhập
@endsection
@section('cssfile')
    <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">
@endsection

@extends('layouts.app')
@section('content')
    <div class="container bc">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
            </ol>
        </nav>
    </div>

    <div class="auth-main">
        <div class="container">
            <div class="auth-container">
                <div class="auth-form-container">
                    <h4>Đăng nhập tài khoản</h4>

                    <form class="form" method="post" action=''>
                        @csrf()
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Lưu đăng nhập </label>
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-auth" value="Đăng Nhập"></input>
                        </div>
                    </form>

                    <div class="form-group">
                        <a href="#"">Quên mật khẩu ?</a>
                        <p>Chưa có tài khoản ? <a href="{{route('get.register')}}">Đăng ký</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
