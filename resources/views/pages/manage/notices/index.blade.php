@extends('layouts.app')

@section('page-header','notices')
@section('page-description','')

@section('content')
	<a href="{{route('notices.create')}}" class="btn btn-success">Create New</a>
	<h4>List of notices</h4>
@endsection
