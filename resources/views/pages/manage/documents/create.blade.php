@extends('layouts.app')

@section('page-header','Create a new document')
@section('page-description','')

@section('content')
	<h4>New document</h4>
	<form action="{{route('documents.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection