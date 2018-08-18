@extends('layouts.app')

@section('page-header','Edit document')
@section('page-description','')

@section('content')
	<h4>Edit document Details</h4>
	<form action="{{route('documents.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
