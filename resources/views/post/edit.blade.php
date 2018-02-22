@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-6 col-md-offset-2">
		<form class="form-horizontal" method="PUT" action="{{ route('update', $statusUpdate->id) }}">
		{{ csrf_field() }}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		        <label for="name" class="col-md-4 control-label">Name</label>

		        <div class="col-md-6">
		            <input id="name" type="text" class="form-control" name="name" value="{{ $statusUpdate->name }}" autofocus>

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
		            <input id="fname" type="text" class="form-control" name="fname" value="{{ $statusUpdate->fname }}">

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
		            <input id="address" type="text" class="form-control" name="address" value="{{ $statusUpdate->address }}">

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
	                    Update
	                </button>
	            </div>
	        </div>
		</form>
	</div>
</div>
@endsection