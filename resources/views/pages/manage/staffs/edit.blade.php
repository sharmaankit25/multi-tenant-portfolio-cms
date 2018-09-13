@extends('layouts.app')

@section('page-header','Edit staff')
@section('page-description','')

@section('content')
	<h4>Edit staff Details</h4>
	<form action="{{route('staffs.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$staff->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$staff->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
