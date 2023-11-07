@extends('layout.Admin.master')
@section('title')
    Thêm mới dịch vụ
@endsection
@section('content')
    <div style="width: 50%;margin: auto;" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Thêm dịch vụ mới
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group form-group-last">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                        <div class="alert-text">
                            ROYALL Kỳ nghỉ hoàn hảo với tiêu chuẩn 5 sao, nơi mọi chi tiết đều hoàn mỹ
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" name="title" class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group row">

                    <div class="col-lg-10">
                        <div class="form-group row align-items-center">
                            <div class="col-md-5">
                                <label>Loại dịch vụ:</label>
                                <div>
                                    <select name="categori_service_id" class="form-control ">
                                        <option selected>All</option>
                                        @foreach ($cate as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-md-none mb-2"></div>
                            </div>
                            <div class="col-md-3">
                                <label>Giá: VNĐ</label>
                                <input type="number" class="form-control" name="price" />
                                <div class="d-md-none mb-2"></div>
                            </div>
                            <div class="col-md-4">
                                <label>Ảnh:</label>
                                <input type="file" class="form-control" name="image" />
                                <div class="d-md-none mb-2"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Mô tả</label>
                    <textarea name="description" class="form-control form-control-solid" rows="3"></textarea>
                </div>
                <div class="form-group d-flex">
                    <div style="height: 40px;" class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-clock-o"></i>
                        </span>
                    </div>
                    <div style="margin-left: 10px;" class="">
                        <div class="input-group timepicker">
                            <input class="form-control is-valid" placeholder="Select time" name="duration"  type="text">
                            <div class="valid-feedback">Thời gian hoàn thành dịch vụ</div>
                        </div>
                        <span class="form-text text-muted">Tips: Hãy bo cho nhân viên tiền dịch vụ !!</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
@endsection
