@extends('layouts.app')

@section('page-header','Edit Feedback Responses')
@section('page-description','')

@section('content')
	<h4>Edit Response Details</h4>
	<form action="{{route('feedback_responses.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
