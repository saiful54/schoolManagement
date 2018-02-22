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
          <div class="col-md-8">
          <div class="box box-primary">
            <table id="" class="table">
                  <tr>
                    
                    <th><img src="{{ asset('storage/'.$all->photo) }}" height="200px" width="280px" alt="loading"></th>
                  </tr>
                  <tr>
                    <th style="width: 25%;">Name</th>
                    <td>{{ $all->name }}</td>
                  </tr>
                  <tr>
                    <th style="width: 30%;">Father's Name</th>
                    <td>{{ $all->fname }}</td>
                  </tr>
                  <tr>                    
                    <th style="width: 30%;">Address</th>
                    <td>{{ $all->address }}</td>
                  </tr>
                  <tr>                  
                    <th style="width: 30%;">Class</th>
                    <td>{{ $all->classes }}</td>
                  </tr>

                  <tr>
                    <th style="width: 30%;">Section</th>
                    <td>{{ $all->section }}</td>
                  </tr>

                  <tr>
                    <th style="width: 30%;">Department</th>
                    <td>{{ $all->dept }}</td>
                  </tr>

                  <tr>
                    <th >Phone</th>
                    <td>{{ $all->phone }}</td>  
                  </tr>
              </table>            
          </div>
        </div> 
      </div>
    </section>
    </div>
@endsection