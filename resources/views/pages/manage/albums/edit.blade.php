@extends('layouts.app')

@section('page-header','Edit album')
@section('page-description','')

@section('content')
	<h4>Edit album Details</h4>
	<form action="{{route('albums.update',['album'=>$album->id])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$album->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$album->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
