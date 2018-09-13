@extends('layouts.app')

@section('page-header','Create a new Achiever')
@section('page-description','')

@section('content')
	<h4>New achiever</h4>
	<form action="{{route('achievers.store')}}" method="post">
		{{ csrf_field() }}

		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Student'
		])
		@include('form.text',[
			'name'=>'position',
			'placeholder'=>'Name of position'
		])
		@include('form.select',[
			'name'=>'standard_id',
			'options'=>[1,2,3],
			'placeholder'=>'Standard of Student'
		])
		@include('form.select',[
			'name'=>'event_id',
			'options'=>array_pluck($events,'name','id')
		])
		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Description'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
