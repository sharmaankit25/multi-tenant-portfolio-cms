@extends('layouts.app')

@section('page-header','Create a new photo')
@section('page-description','')

@section('content')
	<h4>New photo</h4>
	<form action="{{route('photos.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
