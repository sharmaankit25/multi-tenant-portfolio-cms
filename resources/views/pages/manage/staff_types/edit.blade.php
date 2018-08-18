@extends('layouts.app')

@section('page-header','Edit staff_type')
@section('page-description','')

@section('content')
	<h4>Edit staff_type Details</h4>
	<form action="{{route('staff_types.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
