@extends('layouts.app')

@section('page-header','pages')
@section('page-description','')

@section('content')
	<a href="{{route('pages.create')}}" class="btn btn-success">Create New</a>
	<h4>List of pages</h4>
@endsection
