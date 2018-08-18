@extends('layouts.app')

@section('page-header','Create a new result')
@section('page-description','')

@section('content')
	<h4>New result</h4>
	<form action="{{route('results.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
