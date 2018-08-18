@extends('layouts.app')

@section('page-header','Edit photo')
@section('page-description','')

@section('content')
	<h4>Edit photo Details</h4>
	<form action="{{route('photos.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
