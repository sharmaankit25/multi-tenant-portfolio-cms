@extends('layouts.app')

@section('page-header','Create a new challan')
@section('page-description','')

@section('content')
	<h4>New challan</h4>
	<form action="{{route('challans.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
