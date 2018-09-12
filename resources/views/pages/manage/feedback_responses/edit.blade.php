@extends('layouts.app')

@section('page-header','Edit Feedback Responses')
@section('page-description','')

@section('content')
	<h4>Edit Response Details</h4>
	<form action="{{route('feedback_responses.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$feedback_response->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$feedback_response->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
