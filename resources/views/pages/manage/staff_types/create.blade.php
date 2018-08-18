@extends('layouts.app')

@section('page-header','Create a new staff_types')
@section('page-description','')

@section('content')
	<h4>New staff_types</h4>
	<form action="{{route('staff_types.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
