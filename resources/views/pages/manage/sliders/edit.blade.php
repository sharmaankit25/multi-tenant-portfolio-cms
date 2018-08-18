@extends('layouts.app')

@section('page-header','Edit slider')
@section('page-description','')

@section('content')
	<h4>Edit slider Details</h4>
	<form action="{{route('sliders.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
