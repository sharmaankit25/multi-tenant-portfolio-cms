@extends('layouts.app')

@section('page-header','Create a new Achiever')
@section('page-description','')

@section('content')
	<h4>New achiever</h4>
	<form action="{{route('achievers.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
