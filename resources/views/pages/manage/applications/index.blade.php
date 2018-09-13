@extends('layouts.app')

@section('page-header','applications')
@section('page-description','')

@section('content')
	<a href="{{route('applications.create')}}" class="btn btn-success">Create New</a>
	<h4>List of applications</h4>
@endsection
