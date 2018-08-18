@extends('layouts.app')

@section('page-header','admissions')
@section('page-description','')

@section('content')
	<a href="{{route('admissions.create')}}" class="btn btn-success">Create New</a>
	<h4>List of admissions</h4>
@endsection
