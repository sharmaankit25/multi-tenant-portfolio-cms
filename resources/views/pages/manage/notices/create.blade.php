@extends('layouts.app')

@section('page-header','Create a new notice')
@section('page-description','')

@section('content')
	<h4>New notice</h4>
	<form action="{{route('notices.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
