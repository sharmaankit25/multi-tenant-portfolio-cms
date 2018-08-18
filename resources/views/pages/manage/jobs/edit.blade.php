@extends('layouts.app')

@section('page-header','Edit job')
@section('page-description','')

@section('content')
	<h4>Edit job Details</h4>
	<form action="{{route('jobs.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
