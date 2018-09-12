@extends('layouts.app')

@section('page-header','Create a new Organisation')
@section('page-description','')

@section('content')
	<h4>New Organisation</h4>
	<form action="{{route('organisations.store')}}" method="post">
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
