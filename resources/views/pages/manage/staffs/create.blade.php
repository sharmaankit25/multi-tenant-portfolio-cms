@extends('layouts.app')

@section('page-header','Create a new staff')
@section('page-description','')

@section('content')
	<h4>New staff</h4>
	<form action="{{route('staffs.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
