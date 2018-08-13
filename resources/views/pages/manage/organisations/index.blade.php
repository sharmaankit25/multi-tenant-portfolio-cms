@extends('layouts.app')

@section('page-header','Organisations')
@section('page-description','')

@section('content')
	<a href="{{route('organisations.create')}}" class="btn btn-success">Create New</a>
	<h4>List of Organisations</h4>
@endsection
