@extends('layouts.app')

@section('page-header','department Details')
@section('page-description','')

@section('content')
	<a href="{{route('departments.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of department</h4>
@endsection
