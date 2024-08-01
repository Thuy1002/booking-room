@extends('layout.Admin.master')
@section('title')
    Create Discount
@endsection
@section('content')
    <div style="width: 50%;margin: auto;" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                create discount
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{ route('admin.discount.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label>Title</label>
                    <input type="text" name="title" class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" name="amount" class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">Phòng được giảm giá</label>
                    <div class="col-9 col-form-label">
                        <div class="checkbox-inline">
                            @foreach ($room as $item)
                                <label for="{{ $item->id }}"
                                    class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                    <input id="{{ $item->id }}" type="checkbox" value="{{ $item->id }}"
                                        name="room_id[]" />
                                    <span></span>
                                    {{ $item->title }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Description</label>
                    <textarea name="description" class="form-control form-control-solid" rows="3"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <div class="form-group row align-items-center">
                            <div class="col-md-5">
                                <label>Start date:</label>
                                <div class="input-group timepicker">
                                    <input class="form-control is-valid" type="date" name="start_date" id="">
                                </div>
                                <div class="d-md-none mb-2"></div>
                            </div>
                            <div class="col-md-5">
                                <label>End date:</label>
                                <div class="input-group timepicker">
                                    <input class="form-control is-invalid" type="date" name="end_date" id="">
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
