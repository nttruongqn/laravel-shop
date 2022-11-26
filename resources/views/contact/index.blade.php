@extends('layouts.app')
@section('content')
<div class="contact-wrapper" style="height: 100vh">
    <div class="container b-c" style="margin-top:10px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
            </ol>
        </nav>
</div>
<div class="contact-container container" style="margin-top: 10px;">
    <div class="contact-form" style="border: 1px solid #eee; padding:10px 0;">
        <span class="lengend" style="padding-left:15px;font-weight:bold;"> Mời bạn điền thông tin liên hệ </span>
        <form action="" method="post" class="d-flex flex-wrap" >
             @csrf
            <div class="form-group col-sm-12 col-md-6">
                <label for="ct_name">Họ tên <sup>*</sup></label>
                <input type="text" class="form-control" name="ct_name" required>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="ct_email">Email <sup>*</sup></label>
                <input type="text" class="form-control" name="ct_email" required>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="ct_title">Tiêu đề <sup>*</sup></label>
                <input type="text" class="form-control" name="ct_title" required>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="ct_phone">Số điện thoại <sup>*</sup></label>
                <input type="text" class="form-control" name="ct_phone" required>
            </div>
            <div class="form-group col-sm-12 col-md-12">
                <label for="ct_content">Nội dung <sup>*</sup></label>
                <textarea type="text" rows="8" class="form-control" name="ct_content" required></textarea>
            </div>
            <div class="form-group submit-form col-sm-12 col-md-2">
                <div class="submit-review d-flex flex-column">
                    {{-- <p><sup>*</sup> Required Field</p> --}}
                    <button type="submit" href="#" class="add-tag-btn d-flex align-items-center justify-content-center" style="padding:10px;background-color: #0e2333;"><span style="color:#fff">Gửi</span></button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
