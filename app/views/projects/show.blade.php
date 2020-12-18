@extends('layout')

@section('mainContent')
	<h1>Show Project</h1>
	<div>
		<h1>{{$project->name}}</h1>
	</div>
	<p>
		<strong>{{$project->company}}</strong>
	</p>
	<a href="{{$project->id}}/edit">Edit Project</a>
@endsection