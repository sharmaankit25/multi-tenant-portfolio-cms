@extends('layouts.app')

@section('page-header','Create a new job')
@section('page-description','')

@section('content')
	<h4>New job</h4>
	<form action="{{route('jobs.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
