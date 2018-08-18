@extends('layouts.app')

@section('page-header','Create a new event')
@section('page-description','')

@section('content')
	<h4>New Event</h4>
	<form action="{{route('events.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
