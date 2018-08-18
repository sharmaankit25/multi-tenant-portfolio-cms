@extends('layouts.app')

@section('page-header','admission Details')
@section('page-description','')

@section('content')
	<a href="{{route('admissions.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of admission</h4>
@endsection
