@extends('layouts.app')

@section('page-header','Edit staff')
@section('page-description','')

@section('content')
	<h4>Edit staff Details</h4>
	<form action="{{route('staffs.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection