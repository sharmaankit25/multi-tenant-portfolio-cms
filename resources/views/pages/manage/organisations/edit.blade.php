@extends('layouts.app')

@section('page-header','Edit Organisation')
@section('page-description','')

@section('content')
	<h4>Edit Organisation Details</h4>
	<form action="{{route('organisations.update',['organisation'=>$organisation])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Name of Organisation',
			'value'=>$organisation->name
		])

		@include('form.text',[
			'name'=>'address',
			'placeholder'=>'Address',
			'value'=>$organisation->address
		])

		@include('form.text',[
			'type'=>'number',
			'name'=>'phone',
			'placeholder'=>'Phone',
			'value'=>$organisation->phone
		])

		@include('form.text',[
			'name'=>'email',
			'placeholder'=>'Email Address',
			'value'=>$organisation->email
		])

		@include('form.text',[
			'name'=>'lat_long',
			'placeholder'=>'Latitude and Logitude (Ex. 343123sad213,sdas32423d)',
			'value'=>$organisation->lat_long
		])

		@include('form.text',[
			'name'=>'url',
			'placeholder'=>'Domain Address of Website',
			'value'=>$organisation->url
		])

		@include('form.text',[
			'name'=>'social_networks',
			'placeholder'=>'Social Networks comma seperated',
			'value'=>$organisation->social_networks
		])

		@include('form.text',[
			'name'=>'theme',
			'placeholder'=>'Theme Color',
			'value'=>$organisation->theme
		])

		@include('form.text',[
			'type'=>'date',
			'name'=>'renewal_date',
			'placeholder'=>'Renewal Date',
			'value'=>$organisation->renewal_date
		])

		@include('form.textarea',[
			'name'=>'description',
			'placeholder'=>'Album description',
			'value'=>$organisation->description
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
