@extends('layouts.app')

@section('page-header','Edit notice')
@section('page-description','')

@section('content')
	<h4>Edit notice Details</h4>
	<form action="{{route('notices.update',['notice'=>$notice])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Name of Notice',
			'value'=>$notice->title
		])

		@include('form.select',[
			'name'=>'type',
			'options'=>[
				'news'=>'News',
				'notice'=>'Notice'
			],
			'placeholder'=>'Select Type',
			'data'=>$notice->type
		])

		@include('form.text',[
			'name'=>'published_at',
			'type'=>'date',
			'value'=>$notice->published_at
		])

		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Notice description',
			'value'=>$notice->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
