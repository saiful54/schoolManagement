@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Class
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Class</a></li>
        <li class="active">Edit Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        {{ Form::open(array('route'=> ['class.update', $editClass->id], 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'PUT')) }} 
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Class Name</label>
                  <input type="text" name="class_name" class="form-control" value="{{ $editClass->class_name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Numeric Name</label>
                  <input type="text" name="num_name" class="form-control" value="{{ $editClass->num_name }}">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div>
        </div> 
      {!! Form::close() !!}
      </div>
    </section>
    </div>
@endsection