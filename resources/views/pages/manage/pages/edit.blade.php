@extends('layouts.app')

@section('page-header','Edit page')
@section('page-description','')

@section('content')
	<h4>Edit page Details</h4>
	<form action="{{route('pages.update',['page'=>$page])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'title',
			'placeholder'=>'Name of Album',
			'value'=>$page->title
		])

		@include('form.text',[
			'name'=>'content',
			'placeholder'=>'Content',
			'value'=>$page->content
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
