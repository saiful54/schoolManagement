@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Class List
        <small>List of Class</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Class</a></li>
        <li class="active">Class List</li>
      </ol>
    </section>

   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <li class="dropdown" style="list-style: none;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border: 1px solid; padding: 5px;">Show of Class <i class="fa fa-angle-double-down"></i></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="{{ url('show') }}">All</a></li>
                  <li class=""><a href="{{ url('show1') }}">One</a></li>
                  <li class=""><a href="{{ url('show2') }}">Two</a></li>
                  <li class=""><a href="{{ url('show3') }}">Three</a></li>
                  <li class=""><a href="#">Four</a></li>
                </ul>
              </li>


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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Name</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Department</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $slno=1;?>
                  @foreach($alldata as $print)
                  <tr>
                    <td>{{ $slno }}</td>
                    <td>{{ $print->name }}</td>
                    <td>{{ $print->classes }}</td>
                    <td>{{ $print->section }}</td>
                    <td>{{ $print->dept }}</td>
                    <td>
                      <a href="{{ route('view', $print->id) }}" class="btn btn-primary btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">View</a>
                      <a href="{{ route('all.edit', $print->id) }}" class="btn btn-info btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">Edit</a>
                          {{ Form::open(array('route' => ['all.destroy', $print->id], 'style' => '', 'method' => 'delete')) }}
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
