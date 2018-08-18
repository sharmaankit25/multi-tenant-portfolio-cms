@extends('layouts.app')

@section('page-header','staff_types')
@section('page-description','')

@section('content')
	<a href="{{route('staff_types.create')}}" class="btn btn-success">Create New</a>
	<h4>List of staff_types</h4>
@endsection
