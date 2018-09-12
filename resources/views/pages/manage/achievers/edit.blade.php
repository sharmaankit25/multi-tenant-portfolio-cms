@extends('layouts.app')

@section('page-header','Edit achiever')
@section('page-description','')

@section('content')
	<h4>Edit achiever Details</h4>
	<form action="{{route('achievers.update',['achiever'=>$achiever])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		Name
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Student',
			'value'=>$achiever->name
		])
		Position
		@include('form.text',[
			'name'=>'position',
			'placeholder'=>'Name of position',
			'value'=>$achiever->position
		])
		@include('form.select',[
			'name'=>'standard_id',
			'options'=>[1,2,3],
			'placeholder'=>'Standard of Student',
			'data'=>$achiever->standard_id
		])
		@include('form.select',[
			'name'=>'event_id',
			'options'=>array_pluck($events,'name','id'),
			'data'=>$achiever->event_id
		])
		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Description',
			'value'=>$achiever->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
