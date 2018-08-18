@extends('layouts.app')

@section('page-header','Edit achiever')
@section('page-description','')

@section('content')
	<h4>Edit achiever Details</h4>
	<form action="{{route('achievers.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
