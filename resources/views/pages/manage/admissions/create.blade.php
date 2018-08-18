@extends('layouts.app')

@section('page-header','Create a new admission')
@section('page-description','')

@section('content')
	<h4>New admission</h4>
	<form action="{{route('admissions.store')}}" method="post">
		{{ csrf_field() }}
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
