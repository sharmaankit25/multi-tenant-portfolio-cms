@extends('layouts.app')

@section('page-header','Edit Organisation')
@section('page-description','')

@section('content')
	<h4>Edit Organisation Details</h4>
	<form action="{{route('organisations.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
