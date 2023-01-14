@extends('admin::layouts.master')

@section('content')
   <div class="dashboard-container" style="margin: 20px 0;">
    <div class="container-fluid">
        <h3 class="">Trang tổng quan</h3>
        <hr>
        <div class="db-top">
            <div class="row">
                <div class="col-sm-3">
                    <div class="statistical-circle d-flex justify-content-center" style="height: 400px">
                        <div class="s-c-container position-relative d-flex align-items-center justify-content-center" style="width:70%;height: 70%;background-color: #6c757d; border-radius: 50%;">
                        <span style="font-size: 20px; color:#ffffff;">{{ $productCount}} sản phẩm</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="statistical-circle d-flex justify-content-center" style="height: 400px">
                        <div class="s-c-container position-relative d-flex align-items-center justify-content-center" style="width:70%;height: 70%;background-color: #6c757d; border-radius: 50%;">
                        <span style="font-size: 20px; color:#ffffff;">{{ $userCount}} thành viên</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="statistical-circle d-flex justify-content-center" style="height: 400px">
                        <div class="s-c-container position-relative d-flex align-items-center justify-content-center" style="width:70%;height: 70%;background-color: #6c757d; border-radius: 50%;">
                        <span style="font-size: 20px; color:#ffffff;">{{ $articleCount}} bài viết</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="statistical-circle d-flex justify-content-center" style="height: 400px">
                        <div class="s-c-container position-relative d-flex align-items-center justify-content-center" style="width:70%;height: 70%;background-color: #6c757d; border-radius: 50%;">
                        <span style="font-size: 20px; color:#ffffff;">{{ $ratingCount}} đánh giá</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6" style="border-right: 1px solid #eeeeee">
                <div class="db-left">
                 <h4>Danh sách liên hệ mới nhất</h4>
                 <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Trạng thái</th>


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
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
             </div>
             <div class="col-sm-6">
                <div class="db-right">
                    <h4>Danh sách đánh giá sản phẩm mới nhất</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thành viên</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Rating</th>
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
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </div>


   </div>
@endsection
