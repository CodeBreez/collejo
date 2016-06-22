@extends('collejo::layouts.dash')

@section('title', 'Students')

@section('content')

<a href="{{ route('students.new') }}" class="btn btn-default btn-lg pull-right">Create New</a>

<h2>Students</h2>

<div class="table-responsive">
	<table class="table">
		
		<tr>
			<th>Name</th>
			<th>Admission Number</th>
			<th></th>
		</tr>

	</table>
</div>

@endsection