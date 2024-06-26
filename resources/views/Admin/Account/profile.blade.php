@extends('layout.Admin.master')
@section('title')
    Bản thân
@endsection
@section('content')
    <div style="margin-top: -10px;" class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
            <!--begin::Profile Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-drop"></i>
                                            </span>
                                            <span class="navi-text">New Group</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-list-3"></i>
                                            </span>
                                            <span class="navi-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-rocket-1"></i>
                                            </span>
                                            <span class="navi-text">Groups</span>
                                            <span class="navi-link-badge">
                                                <span
                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-bell-2"></i>
                                            </span>
                                            <span class="navi-text">Calls</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-gear"></i>
                                            </span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-magnifier-tool"></i>
                                            </span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="flaticon2-bell-2"></i>
                                            </span>
                                            <span class="navi-text">Privacy</span>
                                            <span class="navi-link-badge">
                                                <span
                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                            <div class="symbol-label"><img src="{{ asset('storage/' . $user->image) }}" alt="">
                            </div>
                            <i class="symbol-badge bg-success"></i>
                        </div>
                        <div>
                            <a href="#"
                                class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ $user->name }}</a>
                            <div class="text-muted">{{ $user->gender }}</div>
                            <div class="mt-2">
                                <a href="{{ route('auth.logout') }}"
                                    class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">LOG OUT</a>
                                <a href="#"
                                    class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a>
                            </div>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Contact-->
                    <div class="py-9">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="font-weight-bold mr-2">Email:</span>
                            <a href="#" class="text-muted text-hover-primary">{{ $user->email }}</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="font-weight-bold mr-2">Phone:</span>
                            <span class="text-muted">{{ $user->number_phone }}</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="font-weight-bold mr-2">Location:</span>
                            <span class="text-muted">{{ $user->address }}</span>
                        </div>
                    </div>
                    <!--end::Contact-->
                    <!--begin::Nav-->
                    <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                        <div class="navi-item mb-2">
                            <a href="custom/apps/profile/profile-1/account-information.html" class="navi-link py-4 active">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">Account Information</span>
                            </a>
                        </div>
                        <div class="navi-item mb-2">
                            <a href="{{route('admin.account.pass_new')}}" class="navi-link py-4">
                                <span class="navi-icon mr-2">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="navi-text font-size-lg">Change Passwort</span>
                                <span class="navi-label">
                                    <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Profile Card-->
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <form action="{{ route('admin.account.change') }}" method="post" enctype="multipart/form-data"
                    class="form" id="kt_form">
                    @csrf
                    <div style="display: flex; justify-content: space-between;" class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Account Information</h3>
                            <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
                        </div>
                        <div class="card-toolbar">
                            <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->

                    <div class="card-body">
                        <!--begin::Heading-->
                        <div class="row">
                            <label class="col-xl-3"></label>
                            <div class="col-lg-9 col-xl-6">
                                <h5 class="font-weight-bold mb-6">Account:</h5>
                            </div>
                        </div>
                        <!--begin::Form Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="spinner spinner-sm spinner-success spinner-right">
                                    <input name="name" class="form-control form-control-lg form-control-solid"
                                        type="text" value="{{ $user->name }}" />
                                </div>
                            </div>
                        </div>
                        <!--begin::Form Group-->
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-at"></i>
                                        </span>
                                    </div>
                                    <input disabled type="text" class="form-control form-control-lg form-control-solid"
                                        value="{{ $user->email }}" placeholder="Email" />
                                </div>
                                <span class="form-text text-muted">Email will not be publicly displayed.
                                    <a href="#" class="font-weight-bold">Learn more</a>.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Number phone</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <input name="number_phone" type="text"
                                        class="form-control form-control-lg form-control-solid"
                                        value="{{ $user->number_phone }}" placeholder="" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <input name="address" type="text"
                                        class="form-control form-control-lg form-control-solid"
                                        value="{{ $user->address }}" placeholder="" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <input name="gender" type="text"
                                        class="form-control form-control-lg form-control-solid"
                                        value="{{ $user->gender }}" placeholder="" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">About me</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="input-group input-group-lg input-group-solid">
                                    <textarea name="about_me" class="form-control form-control-lg form-control-solid" placeholder="Email"> {{ $user->about_me }}</textarea>
                                </div>

                            </div>
                        </div>
                        <!--begin::Form Group-->
                        <!--begin::Form Group-->
                        <div class="form-group row align-items-center">
                            <label class="col-xl-3 col-lg-3 col-form-label">Role</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="checkbox-inline">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" />
                                        <span></span>Đẹp trai </label>
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" />
                                        <span></span>Nấu ăn ngon</label>
                                    <label class="checkbox">
                                        <input type="checkbox" />
                                        <span></span>Chưa người yêu</label>
                                </div>
                            </div>
                        </div>
                        <!--begin::Form Group-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--begin::Form Group-->

                </form>
                <!--end::Form-->
            </div>

            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
@endsection
