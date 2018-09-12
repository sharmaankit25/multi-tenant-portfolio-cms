@extends('layouts.app')

@section('page-header','Create a new slider')
@section('page-description','')

@section('content')
	<h4>New slider</h4>
	<form action="{{route('sliders.store')}}" method="post">
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
