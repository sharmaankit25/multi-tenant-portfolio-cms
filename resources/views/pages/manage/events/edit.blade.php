@extends('layouts.app')

@section('page-header','Edit Event')
@section('page-description','')

@section('content')
	<h4>Edit Event Details</h4>
	<form action="{{route('events.update',['event'=>$event])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		Name
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Event',
			'value'=>$event->name
		])

		Start Date ({{ $event->start_date }})
		@include('form.text',[
			'type'=>'date',
			'name'=>'start_date',
			'placeholder'=>'Start Date',
			'value'=>$event->start_date
		])

		End Date ({{ $event->end_date }})
		@include('form.text',[
			'type'=>'date',
			'name'=>'end_date',
			'placeholder'=>'End Date',
			'value'=>$event->end_date
		])
		Description
		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$event->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
