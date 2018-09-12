@extends('layouts.app')

@section('page-header','Edit Organisation')
@section('page-description','')

@section('content')
	<h4>Edit Organisation Details</h4>
	<form action="{{route('organisations.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$organisation->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$organisation->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
