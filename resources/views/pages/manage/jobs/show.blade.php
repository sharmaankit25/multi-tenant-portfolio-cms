@extends('layouts.app')

@section('page-header','job Details')
@section('page-description','')

@section('content')
	<a href="{{route('jobs.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of job</h4>
@endsection
