@extends('layouts.app')

@section('page-header','Organisation Details')
@section('page-description','')

@section('content')
	<a href="{{route('organisations.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of Organisation</h4>
@endsection
