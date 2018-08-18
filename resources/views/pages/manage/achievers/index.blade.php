@extends('layouts.app')

@section('page-header','achievers')
@section('page-description','')

@section('content')
	<a href="{{route('achievers.create')}}" class="btn btn-success">Create New</a>
	<h4>List of achievers</h4>
@endsection
