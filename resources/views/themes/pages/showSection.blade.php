@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Section List
        <small>List of Section</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Section</a></li>
        <li class="active">Section List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Section List</h3>
            </div>
            <!-- /.box-header -->
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
              <a href="{{ url('addSection') }}" style="float: right;">Add New</a>
              <table id="three" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Section Name</th>
                  <th>Class Name</th>
                  <th>Teacher Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $slno=1;?>
	                @foreach($all as $print)
	                <tr>
	                  <td>{{ $slno }}</td>
	                  <td>{{ $print->section_name }}</td>
                    <td>{{ $print->class_name }}</td>
	                  <td>{{ $print->teacher_name }}</td>
                     <td>
                      <a href="{{ route('section.edit', $print->id) }}" class="btn btn-info btn-sm" style="float:left; padding: 2px 7px; margin-right:5px">Edit</a>
                          {{ Form::open(array('route' => ['section.destroy', $print->id], 'style' => '', 'method' => 'delete')) }}
                          {{ Form::hidden('id', $print->id, array('class' => 'form-control')) }}
                          {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-sm', 'style' => 'padding: 2px 7px;')) }}
                          {!! Form::close() !!}
                      </td>

	                </tr>
                  <?php $slno++;?>
	                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
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
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
@endsection
