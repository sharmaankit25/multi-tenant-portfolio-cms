@extends('layouts.app')

@section('page-header','Create a new event')
@section('page-description','')

@section('content')
	<h4>New Event</h4>
	<form action="{{route('events.store')}}" method="post">
		{{ csrf_field() }}

		Name
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Event'
		])

		Start Date
		@include('form.text',[
			'type'=>'date',
			'name'=>'start_date',
			'placeholder'=>'Start Date'
		])

		End Date
		@include('form.text',[
			'type'=>'date',
			'name'=>'end_date',
			'placeholder'=>'End Date'
		])
		Description
		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Album description'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
