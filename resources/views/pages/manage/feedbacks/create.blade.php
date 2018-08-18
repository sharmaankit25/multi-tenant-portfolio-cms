@extends('layouts.app')

@section('page-header','Create a new Feedback')
@section('page-description','')

@section('content')
	<h4>New Feedback</h4>
	<form action="{{route('feedbacks.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
