@extends('layouts.app')

@section('page-header','challans')
@section('page-description','')

@section('content')
	<a href="{{route('challans.create')}}" class="btn btn-success">Create New</a>
	<h4>List of challans</h4>
@endsection
