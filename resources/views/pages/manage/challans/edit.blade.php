@extends('layouts.app')

@section('page-header','Edit challan')
@section('page-description','')

@section('content')
	<h4>Edit challan Details</h4>
	<form action="{{route('challans.update')}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
