@extends('layouts.app')

@section('page-header','Edit album')
@section('page-description','')

@section('content')
	<h4>Edit album Details</h4>
	<form action="{{route('albums.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
