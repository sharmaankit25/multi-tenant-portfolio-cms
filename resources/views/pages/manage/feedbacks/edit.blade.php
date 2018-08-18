@extends('layouts.app')

@section('page-header','Edit feedback')
@section('page-description','')

@section('content')
	<h4>Edit Feedback Details</h4>
	<form action="{{route('feedbacks.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
