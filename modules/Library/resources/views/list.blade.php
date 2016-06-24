@extends('collejo::layouts.dash')

@section('title', 'Library')

@section('content')

<a href="{{ route('library.new') }}" class="btn btn-default btn-lg pull-right">Create New</a>

<h2>Library</h2>

<div class="table-responsive">
	<table class="table">
		

	</table>
</div>

@endsection