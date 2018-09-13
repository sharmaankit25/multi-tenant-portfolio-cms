@extends('layouts.app')

@section('page-header','Create a new Feedback Responses')
@section('page-description','')

@section('content')
	<h4>New Feedback Responses</h4>
	<form action="{{route('feedback_responses.store')}}" method="post">
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
