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
        <form role="form" action="{{ route('student') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Father's Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="Enter Father's Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Class</label>
                  <select name="classes" class="form-control">
                    <option>Select</option>
                    @foreach($allClass as $print)
                    <?php //echo "<pre>"; var_dump($print); die();?>
                    <option value="{{ $print->class_name }}">{{ $print->class_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Section</label>
                  <select name="section" class="form-control">
                    <option>Select</option>
                    @foreach($allSection as $print)
                    <option value="{{ $print->section_name }}">{{ $print->section_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Department</label>
                  <input type="text" name="dept" class="form-control" placeholder="Department">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone No">
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
                    <!--<div style="height:150px; width:150px; position:absolute; border:1px solid black"></div>
                    <p style="position:relative; margin: 70px auto; margin-left: 18%;">photo</p>
                    <input type="file" name="photo" id="exampleInputFile">-->
                </div>
              </div>
          </div>
        </div>
      </form>
      </div>
    </section>
    </div>
@endsection