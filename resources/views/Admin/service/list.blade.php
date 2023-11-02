@extends('layout.Admin.master')
@section('title')
    Danh Sách dịch vụ
@endsection
@section('content')
    <div class="row">
        <div style="margin:auto;margin-top:-50px;" class="col-xl-10">
            <div style="display: flex;margin-bottom:20px ;justify-content: space-between;"
                class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Local Datasource
                        <span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Export</button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                    Choose an option:</li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-print"></i>
                                        </span>
                                        <span class="navi-text">Print</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-copy"></i>
                                        </span>
                                        <span class="navi-text">Copy</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-excel-o"></i>
                                        </span>
                                        <span class="navi-text">Excel</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-text-o"></i>
                                        </span>
                                        <span class="navi-text">CSV</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-pdf-o"></i>
                                        </span>
                                        <span class="navi-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->
                    <!--begin::Button-->
                    <a href="{{ route('admin.service.add') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..."
                                        id="kt_datatable_search_query" />
                                    <span>
                                        <i class="flaticon2-search-1 text-muted"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Trạng thái:</label>
                                    <select name="status" class="form-control  slect-status"
                                        id="kt_datatable_search_status">
                                        <option>Chọn</option>
                                        <option value="0">Tát cả</option>
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div>
                </div>
            </div>
            <!--begin::Base Table Widget 4-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_4_1">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_4_2">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_4_3">Day</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables4">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_tab_pane_4_1" role="tabpanel"
                            aria-labelledby="kt_tab_pane_4_1">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-140px"></th>
                                            <th class="p-0 min-w-120px"></th>
                                            <th class="p-0 min-w-70px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ser as $item)
                                            <tr>
                                                <td class="pl-0">
                                                    <div class="symbol symbol-50 symbol-light mt-2 mr-2">
                                                        <span style=" width: 90px; height: 74px;" class="symbol-label">
                                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                                class="" alt="">
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <div>
                                                        <a href="#"
                                                            class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $item->title }}</a>
                                                        <span
                                                            class="text-muted font-weight-bold d-block">{{ $item->price }}.
                                                            VNĐ</span>
                                                        <span class="text-muted font-weight-bold d-block">Thời gian:
                                                            {{ $item->duration }}. phút
                                                        </span>
                                                    </div>

                                                </td>

                                                <td>
                                                    <span class="text-muted font-weight-bold d-block">

                                                    </span>
                                                    <div class="col-3">
                                                        <span class="switch switch-outline switch-icon switch-primary">
                                                            <label>
                                                                <input class="doikieu" type="checkbox"
                                                                    {{ $item->status == 1 ? 'checked' : '' }}
                                                                data-service-id="{{ $item->id }}"
                                                                data-url="{{ route('admin.service.change', $item->id) }}" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <a href="{{ route('admin.service.update', $item->id) }}"
                                                        class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2"
                                                        title="Edit details">
                                                        <span class="svg-icon svg-icon-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a onclick="if (confirm('Bạn có muốn xóa không ?')) { window.location.href = '{{ route('admin.service.delete', $item->id) }}'; }"
                                                        class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon"
                                                        title="Delete">
                                                        <span class="svg-icon svg-icon-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="text-right pr-0">
                                                    <a href="#" class="btn btn-icon btn-light btn-sm">
                                                        <span
                                                            class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <rect fill="#000000" opacity="0.3"
                                                                        transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                                                        x="11" y="5" width="2" height="14"
                                                                        rx="1"></rect>
                                                                    <path
                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) ">
                                                                    </path>
                                                                </g>
                                                            </svg><!--end::Svg Icon--></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <div class="pagination">
                        {{ $ser->links('Admin.paginate') }}
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Base Table Widget 4-->
        </div>

    </div>
    <style>
        .pagination {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination-list {
            list-style: none;
            display: flex;
            padding: 0;
        }

        .page-item {
            margin: 0 5px;
            display: inline;
        }

        .page-link {
            padding: 8px 12px;
            border: 1px solid #007BFF;
            /* Màu xanh */
            background-color: #fff;
            /* Màu trắng */
            border-radius: 4px;
            color: #007BFF;
            /* Màu xanh */
            text-decoration: none;
        }

        .page-link:hover {
            background-color: #007BFF;
            /* Màu xanh khi hover */
            color: #fff;
            /* Màu trắng khi hover */
        }

        .page-item.active .page-link {
            background-color: #007BFF;
            /* Màu xanh cho trang hiện tại */
            color: #fff;
            /* Màu trắng cho trang hiện tại */
        }

        .page-item.disabled .page-link {
            pointer-events: none;
            background-color: #ccc;
            /* Màu xám cho trang bị vô hiệu hóa */
            color: #fff;
            /* Màu trắng cho trang bị vô hiệu hóa */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.doikieu').on('change', function() {
                var status = $(this).prop('checked') ? 1 : 2;
                var id = $(this).data('service-id');
                var url = $(this).data('url');
                console.log('Dữ liệu gửi đi:');
                console.log('_token:', '{{ csrf_token() }}');
                console.log('status:', status);
                console.log('id:', id);
                console.log('url:', url);
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status,
                        id: id
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.success,
                        })
                        console.log(response
                            .success); // In thông báo thành công hoặc thông tin trạng thái mới
                    },
                    error: function(error) {
                        console.log('Có lỗi xảy ra khi cập nhật trạng thái sản phẩm.');
                    }
                });
            }),
            $('.slect-status').change(function() {
                var stt = $(this).val();

                $.ajax({
                    url: '{{ route('admin.types.fillersStt') }}',
                    type: 'GET',
                    data: {
                        status: stt
                    },
                    success: function(data) {
                        var htm = $('#product-list').empty();
                        htm.empty();
                        $.each(data, function(index, item) {
                            var newrow = $('<tr>');
                            newrow.append($('<td>').text(item.title));
                                htm.append(newrow);
                        });

                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection
