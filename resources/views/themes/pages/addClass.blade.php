@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Class
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Class</a></li>
        <li class="active">Add Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <form role="form" action="{{ route('class.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Class Name</label>
                  <input type="text" name="class_name" class="form-control" placeholder="Enter Name">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Numeric Name</label>
                  <input type="text" name="num_name" class="form-control" placeholder="Enter Father's Name">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div>
        </div> 
      </form>
      </div>
    </section>
    </div>
@endsection