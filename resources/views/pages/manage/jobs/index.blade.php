@extends('layouts.app')

@section('page-header','jobs')
@section('page-description','')

@section('content')
	<a href="{{route('jobs.create')}}" class="btn btn-success">Create New</a>
	<h4>List of jobs</h4>
@endsection
