@extends('layouts.master')

@section('content')
@include('themes.pages.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Teacher
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teacher</a></li>
        <li class="active">View Teacher</li>
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
                    <td>{{ $all->fname }} {{ $all->lname }}</td>
                  </tr>
                  <tr>                    
                    <th style="width: 30%;">Address</th>
                    <td>{{ $all->address }}</td>
                  </tr>
                  <tr>                  
                    <th style="width: 30%;">Date of Birth</th>
                    <td>{{ $all->dob }}</td>
                  </tr>

                  <tr>
                    <th style="width: 30%;">Email</th>
                    <td>{{ $all->email }}</td>
                  </tr>

                  <tr>
                    <th style="width: 30%;">Phone No</th>
                    <td>{{ $all->phone }}</td>
                  </tr>
              </table>            
          </div>
        </div> 
      </div>
    </section>
    </div>
@endsection