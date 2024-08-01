@extends('layout.Client.master')
@section('title')
    Payment
@endsection
@section('content')
    <section class="pt-5">
        <div class="container">

            <div class="row g-4 g-sm-5">
                <!-- Main content START -->
                <div class="col-xl-8 mb-4 mb-sm-0">
                    <!-- Alert -->
                    <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-2 pe-2"
                        role="alert">
                        <div>
                            <i class="bi bi-exclamation-octagon-fill me-2"></i>
                            Nhập mã để được <a href="#" class="text-reset btn-link mb-0 fw-bold">Giảm giá</a>
                        </div>
                        <button type="button" class="btn btn-link mb-0 text-end" data-bs-dismiss="alert"
                            aria-label="Close"><i class="bi bi-x-lg text-dark"></i></button>
                    </div>

                    <!-- Personal info START -->
                    <div class="card card-body shadow p-4">
                        <!-- Title -->
                        <h5 class="mb-0">Chọn phương thức thanh toán</h5>

                        <!-- Form START -->
                        <div class="row g-3 mt-0">

                            <!-- Cards -->
                            <div class="col-12">
                                <label class="form-label">Chọn phương thức thanh toán</label>
                                <div class="row g-2 ">

                                </div>
                            </div>
                        </div>
                        <!-- Form END -->
                    </div>
                    <!-- Personal info END -->
                </div>
                <div class="col-xl-4">
                    <div class="row mb-0">
                        <div class="col-md-6 col-xl-12">
                            <!-- Order summary START -->
                            <div class="card card-body shadow p-4 mb-4">
                                <!-- Title -->
                                <h4 class="mb-4">Giảm giá đơn hàng </h4>

                                <!-- Coupon START -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Ví dụ mã giảm giá</span>
                                        <p class="mb-0 h6 fw-light">AB12365E</p>
                                    </div>
                                    <div class="input-group mt-2">
                                        <input class="form-control form-control" placeholder="Nhập mã code" discountcode>
                                        <button type="button" class="btn btn-primary">Kiểm tra mã</button>
                                        {{-- onclick="checkcode('{{ route('client.order.checkCode') }}')"  --}}
                                    </div>

                                </div>
                                <hr>
                                <!-- Coupon END -->

                                <form action="{{ route('payment.vnpay') }}" method="post" id="payment">
                                    {{-- {{ route('client.order.vnpay') }} --}}
                                    @csrf
                                    <!-- Course item END -->
                                    <hr> <!-- Divider -->
                                    <div>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Tổng giá</span>
                                            <span class="h6 fw-light mb-0 fw-bold">{{ number_format($total) }}đ
                                                <input type="text" hidden value="{{ $total }}" total_price>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">Giảm được</span>
                                            <span class="text-danger" show_disount>0% - 0đ</span>
                                        </li>
                                        <li class="list-group-item px-0 d-flex justify-content-between">
                                            <span class="h5 mb-0">Kết quả</span>
                                            <span class="h5 mb-0" total_discount>{{ number_format($total) }}đ</span>
                                        </li>
                                    </div>
                                    {{-- @endforeach --}}
                            </div>

                            <input class="form-control with-border" type="text" name="code" placeholder="Nhập code"
                                input-code hidden>


                            <input class="form-control with-border" type="text" name="bank" placeholder="Nhập code"
                                input-pay hidden>


                            </form>

                            <!-- Price and detail -->


                            <!-- Button -->
                            <div class="d-grid">
                                <button style="  margin-left: 120px;" form="payment" name="redirect"
                                    class="btn btn-lg btn-secondary">Thanh toán</button>
                            </div>

                            <!-- Content -->
                            <p class="small mb-0 mt-2 text-center">Bằng cách hoàn tất giao dịch mua của mình,
                                <a href="#"><strong> bạn đồng ý với các Điều khoản dịch vụ này</strong></a>
                            </p>

                        </div>
                        <!-- Order summary END -->
                    </div>
                </div><!-- Row End -->
            </div>
            <!-- Right sidebar END -->

        </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                                Page content END -->
@endsection

@section('js-links')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
@endsection
@push('js-handles')
    <script>
        price = 0

        function checkcode(url) {
            axios.post(url, {
                    code: js_$("[discountcode]").value
                })
                .then(
                    res => {
                        js_$('[input-code]').value = js_$("[discountcode]").value
                        js_$('[show_disount]').innerHTML =
                            `Giảm giá: ${res.data.discount == undefined ? '0' : res.data.discount} %`
                        js_$('[total_discount]').innerHTML = res.data.discount != undefined ? new Intl.NumberFormat('en-US')
                            .format(js_$('[total_price]').value -
                                (js_$('[total_price]').value * (res.data.discount / 100))) + ' đ' :
                            new Intl.NumberFormat('en-US').format(js_$('[total_price]').value) +
                            ' đ'

                        Swal.fire({
                            icon: 'success',
                            title: 'Kiểm tra thành công',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                ).catch(
                    res => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Mã không tồn tại hoặc hết hạn',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                )
        }
    </script>
@endpush
