@extends('layouts.app')

@section('page-header','Create a new Organisation')
@section('page-description','')

@section('content')
	<h4>New Organisation</h4>
	<form action="{{route('organisations.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
