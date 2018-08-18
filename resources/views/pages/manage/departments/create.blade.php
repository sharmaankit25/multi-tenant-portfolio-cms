@extends('layouts.app')

@section('page-header','Create a new department')
@section('page-description','')

@section('content')
	<h4>New department</h4>
	<form action="{{route('departments.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
