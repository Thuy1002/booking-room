@extends('layout.Admin.master')
@section('title')
    Chỉnh sửa
@endsection
@section('content')
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Danh sách phòng
        </h3>
    </div>
    <!--begin::Form-->
    <form action="" enctype="application/x-www-form-urlencoded" method="post">
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
                    <input class="form-control" type="text" id="example-text-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Search</label>
                <div class="col-10">
                    <input class="form-control" type="search" id="example-search-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                    <input class="form-control" type="email" id="example-email-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-url-input" class="col-2 col-form-label">URL</label>
                <div class="col-10">
                    <input class="form-control" type="url" id="example-url-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                <div class="col-10">
                    <input class="form-control" type="tel" id="example-tel-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-password-input" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                    <input class="form-control" type="password" id="example-password-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Number</label>
                <div class="col-10">
                    <input class="form-control" type="number" id="example-number-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                <div class="col-10">
                    <input class="form-control" type="datetime-local" id="example-datetime-local-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" id="example-date-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-month-input" class="col-2 col-form-label">Month</label>
                <div class="col-10">
                    <input class="form-control" type="month" id="example-month-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-week-input" class="col-2 col-form-label">Week</label>
                <div class="col-10">
                    <input class="form-control" type="week" id="example-week-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Time</label>
                <div class="col-10">
                    <input class="form-control" type="time" id="example-time-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-color-input" class="col-2 col-form-label">Color</label>
                <div class="col-10">
                    <input class="form-control" type="color" id="example-color-input" />
                </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Range</label>
                <div class="col-10">
                    <input class="form-control" type="range" />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="reset" class="btn btn-success mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
