@extends('layouts.app')

@section('page-header','Create a new notice')
@section('page-description','')

@section('content')
	<h4>New notice</h4>
	<form action="{{route('notices.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Name of Notice'
		])

		@include('form.select',[
			'name'=>'type',
			'options'=>[
				'news'=>'News',
				'notice'=>'Notice'
			],
			'placeholder'=>'Select Type'
		])

		@include('form.text',[
			'name'=>'published_at',
			'type'=>'date',
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Notice description'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
