@extends('layouts.app')

@section('page-header','Edit photo')
@section('page-description','')

@section('content')
	<h4>Edit photo Details</h4>
	<form action="{{route('photos.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$photo->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$photo->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
