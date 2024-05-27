@extends('layout.Admin.master')
@section('title')
   sửa khuyến mại
@endsection
@section('content')
    <div style="width: 50%;margin: auto;" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Thêm dịch vụ mới
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{ route('admin.discount.update',$discount->id) }}" method="POST" enctype="multipart/form-data">
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
                    <label>Code</label>
                    <input type="text" name="code" value="{{$discount->code}}" class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group">
                    <label>Phần trăm giảm</label>
                    <input type="number" name="amount" value="{{$discount->amount}}" class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Mô tả</label>
                    <textarea name="description" class="form-control form-control-solid" rows="3"> {{$discount->description}}"</textarea>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <div class="form-group row align-items-center">
                            <div class="col-md-5">
                                <label>Ngày bắt bầu:</label>
                                <div class="input-group timepicker">
                                    <input  value="{{$discount->start_date}}"  class="form-control is-valid" type="date" name="start_date" id="">
                                </div>
                                <div class="d-md-none mb-2"></div>
                            </div>
                            <div class="col-md-5">
                                <label>Ngày kết thúc:</label>
                                <div class="input-group timepicker">
                                    <input  value="{{$discount->end_date}}" class="form-control is-invalid" type="date" name="end_date" id="">
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <label>Ảnh:</label>
                                <input type="file" class="form-control" name="image" />
                                <div class="d-md-none mb-2"></div>
                            </div> --}}

                        </div>
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
