@extends('layouts.app')

@section('page-header','Create a new Feedback Responses')
@section('page-description','')

@section('content')
	<h4>New Feedback Responses</h4>
	<form action="{{route('feedback_responses.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
