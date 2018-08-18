@extends('layouts.app')

@section('page-header','page Details')
@section('page-description','')

@section('content')
	<a href="{{route('pages.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of page</h4>
@endsection
