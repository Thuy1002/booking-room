@extends('layout.Admin.master')
@section('title')
    Thêm mới loại phòng
@endsection
@section('content')
<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
      Tên loại phòng
     </h3>
    </div>
    <!--begin::Form-->
    <form class="form">
     <div class="card-body">
      <div class="form-group form-group-last">
       <div class="alert alert-custom alert-default" role="alert">
        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
        <div class="alert-text">
         Phòng của <code>Royall</code><code></code> boolean attribute on an input to prevent user interactions.
         Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.
        </div>
       </div>
      </div>
      <div class="form-group">
       <label>Input</label>
       <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
      </div>
      <div class="form-group">
       <label>Select</label>
       <select class="form-control form-control-solid">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
       </select>
      </div>
      <div class="form-group">
       <label for="exampleTextarea">Textarea</label>
       <textarea class="form-control form-control-solid" rows="3"></textarea>
      </div>
     </div>
     <div class="card-footer">
      <button type="reset" class="btn btn-primary mr-2">Submit</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </form>
    <!--end::Form-->
   </div>
@endsection
