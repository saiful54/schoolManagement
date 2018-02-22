@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Section
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Section</a></li>
        <li class="active">Add Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <form role="form" action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Section Name</label>
                  <input type="text" name="section_name" class="form-control" placeholder="Section Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Class</label>
                  <select name="class_id" class="form-control">
                    <option>Select Class</option>
                    @foreach($allClass as $print)
                    <option value="{{ $print->id }}">{{ $print->class_name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Teacher Name</label>
                  <select name="teacher_name" class="form-control">
                    <option>Select Teacher</option>
                    @foreach($teacher as $print)
                    <option value="{{ $print->fname }} {{ $print->lname }}">{{ $print->fname }} {{ $print->lname }}</option>
                    @endforeach
                  </select>
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