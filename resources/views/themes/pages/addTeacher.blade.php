@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Teacher
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teacher</a></li>
        <li class="active">Add Teacher</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <form role="form" action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Age</label>
                  <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone No</label>
                  <input type="text" name="phone" class="form-control" placeholder="Phone No">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Register Date</label>
                  <input type="date" name="regDate" class="form-control" placeholder="Register Date">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Job Type</label>
                    <select name="jobtype" class="form-control">
                      <option>Select</option>
                      <option value="Professor">Professor</option>
                      <option value="Assistant Professor">Assistant Professor</option>
                      <option value="Senior Lecturer">Senior Lecturer</option>
                      <option value="Lecturer">Lecturer</option>
                      <option value="Assistant Teacher">Assistant Teacher</option>
                    </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
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
      </form>
      </div>
    </section>
    </div>
@endsection