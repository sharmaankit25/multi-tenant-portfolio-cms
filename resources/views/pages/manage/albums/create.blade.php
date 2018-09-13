@extends('layouts.app')

@section('page-header','Create a new album')
@section('page-description','')

@section('content')
	<h4>New album</h4>
	<form action="{{route('albums.store')}}" method="post">
		{{ csrf_field() }}

		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album'
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description'
		])

		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
