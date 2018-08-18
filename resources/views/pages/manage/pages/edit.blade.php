@extends('layouts.app')

@section('page-header','Edit page')
@section('page-description','')

@section('content')
	<h4>Edit page Details</h4>
	<form action="{{route('pages.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
