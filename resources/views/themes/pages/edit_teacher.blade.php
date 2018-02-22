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
        {{ Form::open(array('route'=> ['teacher.update', $all->id], 'enctype' => 'multipart/form-data', 'files' => 'true', 'style' => 'padding:20px', 'method' => 'PUT')) }} 
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" name="fname" class="form-control" value="{{ $all->fname }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" name="lname" class="form-control" value="{{ $all->lname }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" value="{{ $all->dob }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Age</label>
                  <input type="number" name="age" class="form-control" value="{{ $all->age }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" value="{{ $all->email }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="number" name="phone" class="form-control" value="{{ $all->phone }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Register Date</label>
                  <input type="date" name="regDate" class="form-control" value="{{ $all->regDate }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Job Type:</label>
                    
                      <select class="form-control" name="jobtype">
                        <option value="Professor" @if($all->jobtype == 'Professor') selected @endif>Professor</option>
                        <option value="Assistant Professor" @if($all->jobtype == 'Assistant Professor') selected @endif>Assistant Professor</option>
                        <option value="Senior Lecturer" @if($all->jobtype == 'Senior Lecturer') selected @endif>Senior Lecturer</option>
                        <option value="Lecturer" @if($all->jobtype == 'Lecturer') selected @endif>Lecturer</option>
                        <option value="Assistant Teacher" @if($all->jobtype == 'Assistant Teacher') selected @endif>Assistant Teacher</option>
                      </select>
                 
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