@extends('layouts.app')

@section('page-header','Create a new slider')
@section('page-description','')

@section('content')
	<h4>New slider</h4>
	<form action="{{route('sliders.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Slide Content'
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Image Description',
		])

		@include('form.text',[
			'type'=>'file',
			'name'=>'photo'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
