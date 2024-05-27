@extends('layout.Admin.master')
@section('title')
    Rooms
@endsection
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->

        <div class="container">
            {{-- start new-item --}}
            <div style="display: flex;margin-bottom:20px ;justify-content: space-between;"
                class=" card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">ROYALL HOTEL
                        <span class="text-muted pt-2 font-size-sm d-block">Nơi bắt đầu của một kỳ nghỉ đẹp</span>
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
                    <a href="" class="btn btn-primary font-weight-bolder">
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
                        </span>WOA</a>
                    <!--end::Button-->
                </div>
            </div>

            {{-- end add_item --}}

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
                                        <option value="available">Có sẵn</option>
                                        <option value="cleaning">Đạng dọn dẹp</option>
                                        <option value="occupied">Đang được sử dụng</option>
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
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                @foreach ($dataRooms as $item)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch ribbon ribbon-clip ribbon-left">
                            <!--begin::Body-->
                            <div class="ribbon ribbon-clip ribbon-left">
                                <div class="ribbon-target" style="top: 12px;">
                                    <span class="ribbon-inner bg-success"></span>{{ number_format($item->price) }}.
                                    VNĐ
                                </div>
                            </div>
                            <div class="card-body text-center pt-4">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                    <span style="font-size:18px;"  >Số lần đặt: {{ $item->booking->count() }}</span>

                                </div>
                                <!--end::Toolbar-->
                                <!--begin::User-->
                                <div class="mt-7">
                                    <div class="">
                                        <img style="width:220px;border-radius:10px"
                                            src="{{ asset('storage/' . $item->image) }}" alt="">
                                    </div>
                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                        <span class="font-size-h3 font-weight-boldest">JB</span>
                                    </div>
                                </div>
                                <!--end::User-->
                                <!--begin::Name-->
                                <div class="my-2">
                                    <span
                                        class="text-dark font-weight-bold text-hover-primary font-size-h4">{{ $item->title }}</span>
                                </div>
                                <!--end::Name-->
                                <!--begin::Label-->
                                <div style="width:80%;" class="dropdown bootstrap-select form-control dropup">
                                    <span
                                        class="form-control btn-info selectpicker doikieu"> Loại phòng: {{ $item->type->title }}</span>
                                </div>
                                <!--end::Label-->
                                <!--begin::Buttons-->
                                <div class="mt-9 mb-6">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Dịch vụ"
                                        data-placement="left">
                                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="  svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Flower2.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <circle fill="#000000" opacity="0.3" cx="15" cy="17"
                                                        r="5" />
                                                    <circle fill="#000000" opacity="0.3" cx="9" cy="17"
                                                        r="5" />
                                                    <circle fill="#000000" opacity="0.3" cx="7" cy="11"
                                                        r="5" />
                                                    <circle fill="#000000" opacity="0.3" cx="17" cy="11"
                                                        r="5" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="7"
                                                        r="5" />
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Dịch vụ đi kèm:</span>
                                                    <i class="flaticon2-information icon-md text-muted"
                                                        data-toggle="tooltip" data-placement="right"></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>

                                                @if ($item->services && count($item->services) > 0)
                                                    @foreach ($item->services as $ser)
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span
                                                                        class="label label-xl label-inline label-light-success">{{ $ser->title ?? 'Giá trị mặc định' }}</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span
                                                                    class="label label-xl label-inline label-light-success">Không
                                                                    có dịch vụ</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Buttons-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                @endforeach
            </div>
            <!--end::Row-->
            <!--begin::Row-->

            <div class="d-flex justify-content-between align-items-center flex-wrap">
                {{ $dataRooms->links('Admin.paginate') }}
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Container-->
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
        // var maxTitleLength = 5; // Thay đổi giá trị này tùy theo độ dài tối đa bạn muốn cho tiêu đề cột

        // // Lặp qua tất cả các tiêu đề cột và cắt chúng nếu quá dài
        // document.querySelectorAll('.description').forEach(function(th) {
        //     var text = th.textContent;
        //     if (text.length > maxTitleLength) {
        //         th.textContent = text.substring(0, maxTitleLength) + '...';
        //     }
        // });

        var maxContentLength = 50; // Thay đổi giá trị này tùy theo độ dài tối đa bạn muốn
        var descriptionTds = document.getElementsByClassName("description");

        for (var i = 0; i < descriptionTds.length; i++) {
            var descriptionTd = descriptionTds[i];
            var content = descriptionTd.textContent;

            if (content.length > maxContentLength) {
                descriptionTd.textContent = content.substring(0, maxContentLength) + '...';
            }
        };

        $(document).ready(function() {
            $('.doikieu').on('change', function() {
                    var url = $(this).data('url');
                    var id = $(this).data('id');
                    var val = $(this).find('option:selected').data('product-value');
                    console.log(val);
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: val,
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
                            console.log(error);
                        },
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
