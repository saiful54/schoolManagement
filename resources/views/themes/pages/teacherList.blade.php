@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher List
        <small>List of Teacher</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teacher</a></li>
        <li class="active">Teacher List</li>
      </ol>
    </section>

   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Teacher List</h3>
            </div>
           
            <div class="box-body">
              <p class="text-success" style="font-size: 16px;background: beige;font-weight: bold;padding: 2px;">
                <?php
                  $message= Session::get('message');
                  if($message){
                    echo $message;
                    Session::put('message', null);
                  }
                ?>
              </p>
              <a href="{{ url('addTeacher') }}" style="float: right;">Add New</a>
              <table id="two" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Job Type</th>
                  <th style="width: 20%">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $slno=1;?>
                  @foreach($allteacher as $print)
                  <tr>
                    <td>{{ $slno }}</td>
                    <td>{{ $print->fname }} {{ $print->lname }}</td>
                    <td>{{ $print->age }}</td>
                    <td>{{ $print->phone }}</td>
                    <td>{{ $print->email }}</td>
                    <td>{{ $print->jobtype }}</td>
                    <td>
                      <a href="{{ route('view', $print->id) }}" class="btn btn-primary btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">View</a>
                      <a href="{{ route('teacher.edit', $print->id) }}" class="btn btn-info btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">Edit</a>
                          {{ Form::open(array('route' => ['teacher.destroy', $print->id], 'style' => '', 'method' => 'delete')) }}
                          {{ Form::hidden('id', $print->id, array('class' => 'form-control')) }}
                          {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm', 'style' => 'padding: 2px 7px;')) }}
                          {!! Form::close() !!}
                    </td>
                  </tr>
                  <?php $slno++;?>
                  @endforeach                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="#">SKR Development</a>.</strong> All rights
    reserved.
  </footer>
@endsection
