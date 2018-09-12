@extends('layouts.app')

@section('page-header','Create a new Feedback')
@section('page-description','')

@section('content')
	<h4>New Feedback</h4>
	<form action="{{route('feedbacks.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'question',
			'placeholder'=>'Question'
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Description'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
