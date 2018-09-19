@extends('layouts.app')

@section('page-header','Edit slider')
@section('page-description','')

@section('content')
	<h4>Edit slider Details</h4>
	<form action="{{route('sliders.update',['slider'=>$slider])}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		@include('form.select',[
			'name'=>'title',
			'placeholder'=>'Slider For',
			'options'=>$slider_options,
			'data'=>$slider->title
		])
		<hr>
		@include('form.text',[
			'name'=>'description[]',
			'placeholder'=>'Image Description',
		])

		@include('form.text',[
			'type'=>'file',
			'name'=>'photo[]'
		])
		<button class="btn btn-default">Submit</button>
	</form>

@endsection
