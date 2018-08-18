@extends('layouts.app')

@section('page-header','departments')
@section('page-description','')

@section('content')
	<a href="{{route('departments.create')}}" class="btn btn-success">Create New</a>
	<h4>List of departments</h4>
@endsection
