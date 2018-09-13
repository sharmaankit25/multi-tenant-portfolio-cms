@extends('layouts.app')

@section('page-header','Edit job')
@section('page-description','')

@section('content')
	<h4>Edit job Details</h4>
	<form action="{{route('jobs.update',['job'=>$job])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
				@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Title of Job',
			'value'=>$job->title
		])

		@include('form.text',[
			'name'=>'post',
			'placeholder'=>'Position of Job',
			'value'=>$job->post
		])

		@include('form.text',[
			'name'=>'qualification',
			'placeholder'=>'Qualification required',
			'value'=>$job->qualification
		])

		@include('form.text',[
			'name'=>'vacancy',
			'type'=>'number',
			'placeholder'=>'Total Number of vacancies',
			'value'=>$job->vacancy
		])

		@include('form.text',[
			'name'=>'vacant',
			'type'=>'number',
			'placeholder'=>'Total vacant',
			'value'=>$job->vacant
		])

		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Description (Optional)',
			'value'=>$job->description
		])

		@include('form.text',[
			'name'=>'salary',
			'type'=>'number',
			'placeholder'=>'Total Salary per year',
			'value'=>$job->salary
		])

		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
