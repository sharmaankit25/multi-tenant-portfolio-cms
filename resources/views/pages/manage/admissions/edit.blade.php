@extends('layouts.app')

@section('page-header','Edit admission')
@section('page-description','')

@section('content')
	<h4>Edit admission Details</h4>
	<form action="{{route('admissions.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
