@extends('layouts.app')

@section('page-header','documents')
@section('page-description','')

@section('content')
	<a href="{{route('documents.create')}}" class="btn btn-success">Create New</a>
	<h4>List of documents</h4>
@endsection
