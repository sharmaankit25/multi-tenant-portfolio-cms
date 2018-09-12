@extends('layouts.app')

@section('page-header','Edit feedback')
@section('page-description','')

@section('content')
	<h4>Edit Feedback Details</h4>
	<form action="{{route('feedbacks.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$feedback->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$feedback->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
