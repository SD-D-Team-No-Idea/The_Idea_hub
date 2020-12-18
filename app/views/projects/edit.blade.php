@extends('layout')

@section('title')
Update / Delete project
@endsection

@section('mainContent')
	<h2>Update/Delete Project</h2>
	<form class="form-horizontal" method="post" action="/project/public/projects/{{$project->id}}">
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" value="{{$project->name}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="track">Track</label>  
			  <div class="col-md-4">
			  <input id="track" name="track" type="text" placeholder="Enter track" class="form-control input-md" value="{{$project->track}}" required="required">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="patend">Patend</label>  
			  <div class="col-md-4">
			  <input id="patend" name="patend" type="text" placeholder="Enter patend name" class="form-control input-md" value="{{$project->patend}}" required="required">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Update</button>
			  </div>
			</div>

			</fieldset>
		</form>

		<form class="form-horizontal" method="post" action="/project/public/projects/{{$project->id}}">
			@csrf
			@method('delete')
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Delete</button>
			  </div>
			</div>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div>
			<a href="/project/public/projects">Show Projects</a>
		</div>

@endsection