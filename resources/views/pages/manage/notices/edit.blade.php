@extends('layouts.app')

@section('page-header','Edit notice')
@section('page-description','')

@section('content')
	<h4>Edit notice Details</h4>
	<form action="{{route('notices.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$notice->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$notice->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
