@extends('layouts.app')

@section('page-header','result Details')
@section('page-description','')

@section('content')
	<a href="{{route('results.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of result</h4>
@endsection
