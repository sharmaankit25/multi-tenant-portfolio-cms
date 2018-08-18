@extends('layouts.app')

@section('page-header','achiever Details')
@section('page-description','')

@section('content')
	<a href="{{route('achievers.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of achiever</h4>
@endsection
