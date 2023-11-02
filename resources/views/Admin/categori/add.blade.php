@extends('layout.Admin.master')
@section('title')
    Thêm mới loại dịch vụ
@endsection
@section('content')
    <div style="width: 50%;margin: auto; margin-top: -50px;" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Tên loại phòng
            </h3>
        </div>
        <!--begin::Form-->
        <form class="form" action="{{ route('admin.categori.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label>Tên loại phòng</label>
                    <input type="text" name="title"  class="form-control form-control-solid" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Mô tả</label>
                    <textarea name="content" class="form-control form-control-solid" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Ảnh</label>
                    <input type="file" name="image"  class="form-control form-control-solid" placeholder="" />
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
