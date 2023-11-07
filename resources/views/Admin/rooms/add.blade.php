@extends('layout.Admin.master')
@section('title')
    Thêm mới phòng
@endsection
@section('content')
    <div style="margin: auto;width: 70%;" class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách phòng
            </h3>
        </div>
        <!--begin::Form-->
        <form action="{{ route('admin.rooms.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group mb-8">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                        <div class="alert-text">
                            Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Tên phòng</label>
                    <div class="col-10">
                        <input style="    width: 70%;" class="form-control" name="title" type="text"
                            id="example-text-input" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Tầng</label>
                    <div class="col-10">
                        <input style="    width: 70%;" class="form-control" type="number" name="floor"
                            id="example-search-input" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">View</label>
                    <div class="col-10">
                        <input style="    width: 70%;" class="form-control" name="view" type="text"
                            id="example-email-input" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Tiện nghi</label>
                    <div class="col-10">
                        <input style="    width: 70%;" class="form-control" name="imagfacilitiese" id="example-url-input" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">Giới hạn người ở</label>
                    <div class="col-10">
                        <input style="    width: 70%;" class="form-control" name="capacity" type="number"
                            id="example-url-input" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label"></label>
                    <div class="col-lg-10">
                        <div class="form-group row align-items-center">
                            <div class="col-md-5">
                                <label>Loại phòng:</label>
                                <div>
                                    <select name="type_id" class="form-control ">
                                        <option selected>All</option>
                                        @foreach ($typ as $item)
                                            <option value="{{$item->id}}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-md-none mb-2"></div>
                            </div>
                            <div class="col-md-3">
                                <label>Giá:</label>
                                <input type="number" class="form-control" name="price" />
                                <div class="d-md-none mb-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">Dịch vụ</label>
                    <div class="col-9 col-form-label">
                        <div class="checkbox-inline">
                            @foreach ($servi as $item)
                                <label for="{{ $item->id }}" class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                    <input id="{{ $item->id }}" type="checkbox" value="{{$item->id}}"  name="service_id[]"/>
                                    <span></span>
                                    {{ $item->title }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" for="example-number-input">Mô tả
                        <span class="text-danger">*</span></label>
                    <div class="col-10">
                        <textarea style="width: 70%;" class=" form-control" name="description" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Ảnh mô tả</label>
                    <div class="col-10">
                        <input style="width: 70%;" class="form-control" type="file"  multiple accept="image/*" name="description_img[]"
                            id="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Ảnh</label>
                    <div class="col-10">
                        <input style="width: 70%;" class="form-control" type="file" name="image"
                            id="example-number-input" />
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
