@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.get.list.transaction') }}">Đơn hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
            </ol>
        </nav>
    </div>

    <div class="tm-a">
        <h1 class="title-manager">Quản lý đơn hàng</h1>
        <h2><a href="/">Thêm mới </a></h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if ($transactions)
                @foreach ($transactions as $key => $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ isset($transaction->user->name) ? $transaction->user->name : '' }}</td>
                        <td>{{ $transaction->tr_address }}</td>
                        <td>{{ $transaction->tr_phone }}</td>
                        <td>{{ number_format($transaction->tr_total, 0, ',', '.') }} VNĐ</td>
                        <td>
                            @if ($transaction->tr_status == 1)
                                <a href="#"><span class="badge bg-success">Đã xử lý</span>
                                </a>
                            @else
                                <a href=""><span
                                        class="badge bg-danger">Chưa xử lý</span>
                                </a>
                            @endif
                        </td>

                        <td>
                            <a class="btn btn-success" href="/"k>Sửa</a>
                            <a class="btn btn-danger js_order_item" data-id="{{$transaction->id}}" href="{{ route('admin.get.view.order', $transaction->id) }}">Xem</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <h4 class="modal-title">Chi tiết đơn hàng #<b class="transaction_id"></b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body" id="md_content">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
<script>
    $(function(){
        $('.js_order_item').click(function (e) {
            e.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $('#myModalOrder').modal('show');
            $('.transaction_id').text('').text($this.attr('data-id'));

            $.ajax({
                type: "GET",
                url: url,
                success: function (response) {
                    console.log(response)
                    if(response){
                        $("#md_content").html('').append(response);
                    }
                }
            });
        });
    })
</script>
@endsection
