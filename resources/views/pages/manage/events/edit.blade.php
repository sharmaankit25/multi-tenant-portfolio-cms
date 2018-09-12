@extends('layouts.app')

@section('page-header','Edit Event')
@section('page-description','')

@section('content')
	<h4>Edit Event Details</h4>
	<form action="{{route('events.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$event->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$event->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
