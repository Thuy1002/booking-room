@extends('layout.Client.master')

@section('title')
    Booking
@endsection

@section('content')
    <div style="width:1400px; margin-top:10px; margin:auto;">
        <!--begin::Page Layout-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                <!--begin::List Widget 17-->
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
                        </h3>
                    </div>
                    <div class="card-body pt-4" style="max-height: 400px; overflow-y: auto;">
                        <!--begin::Container-->
                        <div>
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-8">
                                <!--begin::Symbol-->
                                <div class="symbol mr-5 pt-1">
                                    <div class="symbol-label min-w-65px min-h-100px"
                                        style="background-image: url('{{ asset('client/images/room-1.jpg') }}');">
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <a href="#"
                                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The
                                        Great</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="text-muted font-weight-bold font-size-sm pb-4">
                                        Amazing Short Story About<br>
                                        Darius greatness
                                    </span>
                                    <!--end::Text-->
                                    <!--begin::Action-->
                                    <div><button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2"
                                            fdprocessedid="x0pxp">Book Now</button></div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Aside-->

            <!--begin::Layout-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Tabs-->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="my-booking-tab" data-toggle="tab" href="#my-booking" role="tab"
                            aria-controls="my-booking" aria-selected="true">My Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="calculating-tab" data-toggle="tab" href="#calculating" role="tab"
                            aria-controls="calculating" aria-selected="false">Calculating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="payment-completed-tab" data-toggle="tab" href="#payment-completed"
                            role="tab" aria-controls="payment-completed" aria-selected="false">Payment Completed</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!--begin::My Booking Tab-->
                    <div class="tab-pane fade show active" id="my-booking" role="tabpanel" aria-labelledby="my-booking-tab">
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <!--end::Header-->
                            <div class="card-body">
                                <!--begin::Tables-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <!--begin::Cart Header-->
                                        <thead>
                                            <tr>
                                                <th>Room</th>
                                                <th class="text-center">Check in</th>
                                                <th class="text-center">Check out</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Cart Header-->
                                        <tbody>
                                            <!--begin::Cart Content-->
                                            @foreach ($cartRoom as $item)
                                                @if ($item->payment_status == 'unpaid')
                                                    <tr>
                                                        <td class="d-flex align-items-center font-weight-bolder">
                                                            <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                                                <div class="symbol-label"
                                                                    style="background-image:url('{{ asset('client/images/room-2.jpg') }}');">
                                                                </div>
                                                            </div>
                                                            <a href="#"
                                                                class="text-dark text-hover-primary">{{ $item->room->title }}</a>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            {{ $item->check_in_date }}
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            {{ $item->check_out_date }}
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            {{ number_format($item->room->price) }}
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <a id="updatePay"
                                                                data-url="{{ route('booking.update', $item->id) }}"
                                                                data-id="{{ $item->id }}"
                                                                class="btn btn-primary">Add</a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Tables-->
                            </div>
                        </div>
                    </div>
                    <!--end::My Booking Tab-->

                 <!--begin::Calculating Tab-->
<div class="tab-pane fade" id="calculating" role="tabpanel" aria-labelledby="calculating-tab">
    <div class="card card-custom gutter-b">
        <!--begin::Header-->

        <!--end::Header-->
        <div class="card-body">
            <!--begin::Tables-->
            <div class="table-responsive">
                <table class="table">
                    <!--begin::Cart Header-->
                    <thead>
                        <tr>
                            <th>Room</th>
                            <th class="text-center">Check in</th>
                            <th class="text-center">Check out</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <!--end::Cart Header-->
                    <tbody>
                        <!--begin::Cart Content-->
                        @foreach ($cartRoom as $item)
                            @if ($item->payment_status == 'calculating')
                                <tr>
                                    <td class="d-flex align-items-center font-weight-bolder">
                                        <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                            <div class="symbol-label"
                                                style="background-image:url('{{ asset('client/images/room-2.jpg') }}');">
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark text-hover-primary">{{ $item->room->title }}</a>
                                    </td>
                                    <td class="text-center align-middle">
                                        {{ $item->check_in_date }}
                                    </td>
                                    <td class="text-center align-middle">
                                        {{ $item->check_out_date }}
                                    </td>
                                    <td class="text-center align-middle">
                                        {{ number_format($item->room->price) }}
                                    </td>
                                    <td class="text-center align-middle">
                                        <a id="updatePay2" data-url="{{ route('booking.update', $item->id) }}"
                                            data-id="{{ $item->id }}" class="btn btn-primary">Remove</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <!-- Tổng tiền -->
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right align-middle font-weight-bold">Total:</td>
                            <td class="text-center align-middle font-weight-bold">
                                {{ number_format($total) }} <!-- $total là tổng tiền bạn tính toán -->
                            </td>
                        </tr>
                        <!-- Nút "Check Out" -->
                        <tr>
                            <td colspan="5">
                                <div>
                                    <a style="float: right;font-size:20px;" href="{{ route('payment.pay2') }}"
                                        class="btn btn-secondary">Check Out</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Tables-->
        </div>
    </div>
</div>
<!--end::Calculating Tab-->



                    <!--begin::Payment Completed Tab-->
                    <div class="tab-pane fade" id="payment-completed" role="tabpanel"
                        aria-labelledby="payment-completed-tab">
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <!--end::Header-->
                            <div class="card-body">
                                <!--begin::Tables-->
                                <div class="table-responsive">
                                    <table class="table">
                                        <!--begin::Cart Header-->
                                        <thead>
                                            <tr>
                                                <th>Room</th>
                                                <th class="text-center">Check in</th>
                                                <th class="text-center">Check out</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <!--end::Cart Header-->
                                        <tbody>
                                            <!--begin::Cart Content-->
                                            @foreach ($paid as $item)
                                                <tr>
                                                    <td class="d-flex align-items-center font-weight-bolder">
                                                        <div class="symbol symbol-60 flex-shrink-0 mr-4 bg-light">
                                                            <div class="symbol-label"
                                                                style="background-image:url('{{ asset('client/images/room-2.jpg') }}');">
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="text-dark text-hover-primary">{{ $item->room->title }}</a>
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        {{ $item->check_in_date }}
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        {{ $item->check_out_date }}
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        {{ number_format($item->room->price) }}
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        <a href="#" class="btn btn-primary">Remove</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Tables-->
                            </div>
                        </div>
                    </div>
                    <!--end::Payment Completed Tab-->
                </div>
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Page Layout-->
    </div>


    <script>
        $(document).ready(function() {
            $('#updatePay').click(function() {
                var id = $(this).data('id');
                var url = $(this).data('url');
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: res
                                .success, // Giả sử 'res.success' chứa thông báo thành công
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location
                                    .reload(); // Tải lại trang sau khi người dùng nhấn 'OK'
                            }
                        });
                        console.log(res);
                    },
                    error: function(err) {
                        console.log("Lỗi gì đây:", err);
                    }
                });
            });
            $('#updatePay2').click(function() {
                var id = $(this).data('id');
                var url = $(this).data('url');
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: res
                                .success, // Giả sử 'res.success' chứa thông báo thành công
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location
                                    .reload(); // Tải lại trang sau khi người dùng nhấn 'OK'
                            }
                        });
                        console.log(res);
                    },
                    error: function(err) {
                        console.log("Lỗi gì đây:", err);
                    }
                });
            });
        });
    </script>
@endsection
