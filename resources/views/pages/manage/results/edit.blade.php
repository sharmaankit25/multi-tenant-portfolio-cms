@extends('layouts.app')

@section('page-header','Edit result')
@section('page-description','')

@section('content')
	<h4>Edit result Details</h4>
	<form action="{{route('results.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$result->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$result->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
