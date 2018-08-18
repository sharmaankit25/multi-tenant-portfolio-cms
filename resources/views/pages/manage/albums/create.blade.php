@extends('layouts.app')

@section('page-header','Create a new album')
@section('page-description','')

@section('content')
	<h4>New album</h4>
	<form action="{{route('albums.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
