@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Student
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Student</a></li>
        <li class="active">Add Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        {{ Form::open(array('route'=> ['all.update', $all->id], 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'PUT')) }} 
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $all->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Father's Name</label>
                  <input type="text" name="fname" class="form-control" value="{{ $all->fname }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control" value="{{ $all->address }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Class</label>

                 <select class="form-control" name="classes">
                  @foreach($all as $print)
                  <option value="{{ $all->classes }}" @if( $all->classes == '{{ $print->classes }}') selected @endif>{{ $all->classes }}</option>
                  @endforeach
                  </select>
                   <!--<input type="text" name="classes" class="form-control" value="{{ $all->classes }}">-->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Section</label>
                  <input type="text" name="section" class="form-control" value="{{ $all->section }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Department</label>
                  <input type="text" name="dept" class="form-control" value="{{ $all->dept }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="text" name="phone" class="form-control" value="{{ $all->phone }}">
                </div>
                
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div>
        </div> 

        <div class="col-md-4">
          <div class="box box-primary">            
              <div class="box-body">
                <div class="form-group text-center">
                    <label for="exampleInputFile">Photo</label><br>
                    <div class="demo-droppable" id="file_drag_area" style="padding: 20%;">  
                    <i style="font-size:50px; position: absolute; margin: -13% -8%;" class="fa fa-cloud-upload" id="AccountText1"></i>
                    <p>Drag files here or click to upload</p>
                    <input type="file" name="photo" id="photoupload" data-hasfile="false" style="display: none;"/>              
                    </div>
                    <div class="output" id="upload_file" style="position: relative;"></div>
                </div>
              </div>
          </div>
        </div>
      {!! Form::close() !!}
      </div>
    </section>
    </div>
@endsection