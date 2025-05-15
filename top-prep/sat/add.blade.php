@extends('layout.app')
@section('content')
<!-- Start Content-->
<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12 text-center">
      <div class="page-title-box">
        <h4 class="page-title text-left">ADD HEADER</h4>

        @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{ session('flash_message') }}
        </div>
        @endif

        @if(Session::has('flash_error_message'))
        <div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> {{ session('flash_error_message') }}
        </div>
        @endif

      </div>
    </div>
  </div>     
  <!-- end page title --> 

  <!-- Form row -->
  <div class="row">
   <div class="col-lg-11">
    <div class="card">
      <div class="card-body">

        {!! Form::open(array('url'=>route('header.store'), 'method' => 'POST','files'=> true,'id'=>'add_page')) !!}
        @csrf

         <div class="form-group">
        <label for="">Select Board</label>
          {!! Form::select('board_id',$boards,1,['class'=>'form-control board-select','placeholder'=>'Select Boards','data-bvalidator'=>'required','disabled'=>'true']) !!}
        </div>

        <div class="form-group">
                <label for="">Header Menus</label>
                <table class="table">
                  <tr style="background-color: #3c8dbc;">
                    <th style="width:14%;color:white;">Name</th>
                    <th style="width:14%;color:white;">Url</th>
                    <th class="text-right" style="width:5%;">
                      <a href="javascript:void(0)" class="btn btn-xs btn-rounded btn-warning new-item" data-toggle="tooltip" title="Add new item">+</a>
                    </th>
                  </tr>
                  <tr>             
                    <td style="padding-left: 0;">
                      <input type="text" name="header_name[]" class="form-control" placeholder="Enter Name" data-bvalidator="required">
                    </td>
                    <td style="padding-left: 0;">
                      <input type="text" name="header_url[]" class="form-control" placeholder="Enter Url" data-bvalidator="required">
                    </td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-xs btn-rounded btn-danger removeItem" data-toggle="tooltip" title="Remove item">-</a>
                    </td>
                  </tr>
                </table>
              </div>  
     
      <div class="form-group">
          <label for="name">Enter Phone No.</label>
          {!! Form::text('phoneno','', array('class' => 'form-control','data-bvalidator' => 'required,number','placeholder'=>'Enter Phone No.','autocomplete'=>'off')) !!}
      </div>

       
        <div class="form-group">
            <label for="">Status</label>
            {!! Form::select('is_active',$status,'', ['class' => 'form-control','placeholder'=>'Select Status','data-bvalidator'=>'required']) !!}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a onclick="goBack();" class="btn btn-danger pull-right">Cancel</a>
        {!! Form::close() !!}

      </div> <!-- end card-body-->
    </div> <!-- end card-->
  </div>  <!-- col end -->
</div>
<!-- end row -->
</div> <!-- container -->
@endsection