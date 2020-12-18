@extends('layout')

@section('title')
List projects
@endsection
@section('mainContent')
	<h1>List project</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
		@foreach($projects as $project)
		<tr>
			<td><a href="projects/{{$project->id}}">{{$project->name}}</a> </td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>
	<a href="projects/create">Add New project</a>
@endsection