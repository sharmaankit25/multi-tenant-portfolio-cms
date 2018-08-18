@extends('layouts.app')

@section('page-header','Create a new application')
@section('page-description','')

@section('content')
	<h4>New application</h4>
	<form action="{{route('applications.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
