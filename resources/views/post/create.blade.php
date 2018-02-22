@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-6 col-md-offset-2">
		<form class="form-horizontal" method="POST" action="{{ route('posts.store') }}">
		{{ csrf_field() }}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		        <label for="name" class="col-md-4 control-label">Name</label>

		        <div class="col-md-6">
		            <input id="name" type="text" class="form-control" name="name" value="" autofocus>

		            @if ($errors->has('name'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('name') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		        <label for="email" class="col-md-4 control-label">Father's Name</label>

		        <div class="col-md-6">
		            <input id="fname" type="text" class="form-control" name="fname" value="">

		            @if ($errors->has('fname'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('fname') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		        <label for="password" class="col-md-4 control-label">Address</label>

		        <div class="col-md-6">
		            <input id="address" type="text" class="form-control" name="address">

		            @if ($errors->has('address'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('address') }}</strong>
		                </span>
		            @endif
		        </div>
		    </div>

		    <div class="form-group">
	            <div class="col-md-6 col-md-offset-4">
	                <button type="submit" class="btn btn-primary">
	                    Submit
	                </button>
	            </div>
	        </div>
		</form>
	</div>


	<div class="col-md-9 col-md-offset-1">
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Father's Name</td>
				<td>Address</td>
				<td>Status</td>
				<td>Action</td>
			</tr>
			@foreach($all as $print)
			<tr>
				<td>{{ $print->id }}</td>
				<td>{{ $print->name }}</td>
				<td>{{ $print->fname }}</td>
				<td>{{ $print->address }}</td>
				<td>
					<?php 
						if($print->status==0){
							echo "<span style='color:red'>Pending</span>"; 
						}else{
							echo "<span style='color:green'> Approved </span>";
						}
						
					?>						
				</td>
				<td>
					<a href="{{ route('approve', $print->id) }}" class="btn btn-info btn-xs">Approve</a>
					<a href="{{ route('edit', $print->id) }}" class="btn btn-warning btn-xs">Edit</a>
					<a href="{{ route('delete', $print->id) }}" class="btn btn-danger btn-xs">Reject</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>	
</div>
@endsection