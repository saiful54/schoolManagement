@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Section
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Section</a></li>
        <li class="active">Edit Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        {{ Form::open(array('route'=> ['section.update', $editSection->id], 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'PUT')) }} 
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Section Name</label>
                  <input type="text" name="section_name" class="form-control" value="{{ $editSection->section_name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Teacher Name</label>
                  <input type="text" name="teacher_name" class="form-control" value="{{ $editSection->teacher_name }}">
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