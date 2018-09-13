@extends('layouts.app')

@section('page-header','staffs')
@section('page-description','')

@section('content')
	<a href="{{route('staffs.create')}}" class="btn btn-success">Create New</a>
	<h4>List of staffs</h4>
@endsection
