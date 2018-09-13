@extends('layouts.app')

@section('page-header','Create a new Organisation')
@section('page-description','')

@section('content')
	<h4>New Organisation</h4>
	<form action="{{route('organisations.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Organisation'
		])

		@include('form.text',[
			'name'=>'address',
			'placeholder'=>'Address'
		])

		@include('form.text',[
			'type'=>'number',
			'name'=>'phone',
			'placeholder'=>'Phone'
		])

		@include('form.text',[
			'name'=>'email',
			'placeholder'=>'Email Address'
		])

		@include('form.text',[
			'name'=>'lat_long',
			'placeholder'=>'Latitude and Logitude (Ex. 343123sad213,sdas32423d)'
		])

		@include('form.text',[
			'name'=>'url',
			'placeholder'=>'Domain Address of Website'
		])

		@include('form.text',[
			'name'=>'social_networks',
			'placeholder'=>'Social Networks comma seperated'
		])

		@include('form.text',[
			'name'=>'theme',
			'placeholder'=>'Theme Color'
		])

		@include('form.text',[
			'type'=>'date',
			'name'=>'renewal_date',
			'placeholder'=>'Renewal Date'
		])

		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Album description'
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
