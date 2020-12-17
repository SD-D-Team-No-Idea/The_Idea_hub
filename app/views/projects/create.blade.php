@extends('layout')

@section('title')
Add a new project
@endsection

@section('mainContent')
	<h2>Add project</h2>
	<form class="form-horizontal" method="post" action="/project/public/projects">
		@csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="track">Track</label>  
			  <div class="col-md-4">
			  <input id="track" name="track" type="text" placeholder="Enter track" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="patend">Patend</label>  
			  <div class="col-md-4">
			  <input id="patend" name="patend" type="text" placeholder="Enter patend name" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
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