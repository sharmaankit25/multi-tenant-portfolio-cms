@extends('layouts.app')

@section('page-header','Edit application')
@section('page-description','')

@section('content')
	<h4>Edit application Details</h4>
	<form action="{{route('applications.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$application->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$application->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
