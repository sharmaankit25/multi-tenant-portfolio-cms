@extends('layouts.app')

@section('page-header','results')
@section('page-description','')

@section('content')
	<a href="{{route('results.create')}}" class="btn btn-success">Create New</a>
	<h4>List of results</h4>
@endsection
