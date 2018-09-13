@extends('layouts.app')

@section('page-header','Edit challan')
@section('page-description','')

@section('content')
	<h4>Edit challan Details</h4>
	<form action="{{route('challans.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Album',
			'value'=>$challan->name
		])

		@include('form.text',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$challan->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
