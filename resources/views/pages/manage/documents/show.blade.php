@extends('layouts.app')

@section('page-header','document Details')
@section('page-description','')

@section('content')
	<a href="{{route('documents.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of document</h4>
@endsection
