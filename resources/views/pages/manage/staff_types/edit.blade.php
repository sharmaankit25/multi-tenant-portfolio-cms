@extends('layouts.app')

@section('page-header','Edit staff_type')
@section('page-description','')

@section('content')
	<h4>Edit staff_type Details</h4>
	<form action="{{route('staff_types.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$staff_type->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$staff_type->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
