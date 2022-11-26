<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> {{ \Request::route()->getName() == 'home' ? 'Trang chủ' : '' }}
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/format.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    @if (\Request::route()->getName() == 'home' )
     <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @endif
    @yield('cssfile')

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product-list.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form-pay.css') }}"> --}}



    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-4.6.2/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/libs/slick/slick.css">
    <link rel="stylesheet" href="assets/libs/slick/slick-theme.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome-free-6.2.0-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome-free-6.2.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome-free-6.2.0-web/css/brands.min.css') }}">
</head>
<div class="wrapper w-lp">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</div>
<script src="{{ asset('assets/libs/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-4.6.2/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/libs/fontawesome-free-6.2.0-web/js/all.min.js') }}"></script>
<script src="{{ asset('assets/libs/fontawesome-free-6.2.0-web/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/libs/slick/slick.min.js') }}"></script>
</body>
@yield('script')

</html>
