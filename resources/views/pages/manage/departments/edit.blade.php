@extends('layouts.app')

@section('page-header','Edit department')
@section('page-description','')

@section('content')
	<h4>Edit department Details</h4>
	<form action="{{route('departments.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
