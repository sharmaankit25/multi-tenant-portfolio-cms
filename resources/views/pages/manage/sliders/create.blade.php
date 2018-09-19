@extends('layouts.app')

@section('page-header','Create a new slider')
@section('page-description','')

@section('content')
	<h4>New slider</h4>
	@if(!empty($slider_options))
	<form action="{{route('sliders.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.select',[
			'name'=>'title',
			'placeholder'=>'Slider For',
			'options'=>$slider_options
		])
	<hr>
		<div class="repeater">
			@include('form.text',[
				'name'=>'description[]',
				'placeholder'=>'Image Description',
			])

			@include('form.text',[
				'type'=>'file',
				'name'=>'photo[]'
			])
			<br>
			@include('form.text',[
				'name'=>'description[]',
				'placeholder'=>'Image Description',
			])

			@include('form.text',[
				'type'=>'file',
				'name'=>'photo[]'
			])
			<br>
			@include('form.text',[
				'name'=>'description[]',
				'placeholder'=>'Image Description',
			])

			@include('form.text',[
				'type'=>'file',
				'name'=>'photo[]'
			])
			<br>
			@include('form.text',[
				'name'=>'description[]',
				'placeholder'=>'Image Description',
			])

			@include('form.text',[
				'type'=>'file',
				'name'=>'photo[]'
			])
			<br>
			@include('form.text',[
				'name'=>'description[]',
				'placeholder'=>'Image Description',
			])

			@include('form.text',[
				'type'=>'file',
				'name'=>'photo[]'
			])
		</div>
		<button class="btn btn-default">Submit</button>
	</form>
	@else
	<h5>No Slider Options.All Sliders are set.</h5>
	@endif

@endsection
