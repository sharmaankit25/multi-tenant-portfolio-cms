@extends('layouts.app')

@section('page-header','Create a new job')
@section('page-description','')

@section('content')
	<h4>New job</h4>
	<form action="{{route('jobs.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Title of Job'
		])

		@include('form.text',[
			'name'=>'post',
			'placeholder'=>'Position of Job'
		])

		@include('form.text',[
			'name'=>'qualification',
			'placeholder'=>'Qualification required'
		])

		@include('form.text',[
			'name'=>'vacancy',
			'type'=>'number',
			'placeholder'=>'Total Number of vacancies'
		])

		@include('form.text',[
			'name'=>'vacant',
			'type'=>'number',
			'placeholder'=>'Total vacant'
		])

		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Description (Optional)'
		])

		@include('form.text',[
			'name'=>'salary',
			'type'=>'number',
			'placeholder'=>'Total Salary per year'
		])

		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
