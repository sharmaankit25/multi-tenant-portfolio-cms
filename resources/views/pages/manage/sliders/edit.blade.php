@extends('layouts.app')

@section('page-header','Edit slider')
@section('page-description','')

@section('content')
	<h4>Edit slider Details</h4>
	<form action="{{route('sliders.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$slider->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$slider->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
