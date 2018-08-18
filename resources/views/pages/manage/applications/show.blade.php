@extends('layouts.app')

@section('page-header','application Details')
@section('page-description','')

@section('content')
	<a href="{{route('applications.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of application</h4>
@endsection
