@extends('layouts.app')

@section('page-header','Create a new page')
@section('page-description','')

@section('content')
	<h4>New page</h4>
	<form action="{{route('pages.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Page Title'
		])

		@include('form.textarea',[
			'name'=>'content',
			'placeholder'=>'Content'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
