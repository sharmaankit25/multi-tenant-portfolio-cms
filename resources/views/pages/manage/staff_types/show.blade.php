@extends('layouts.app')

@section('page-header','staff_type Details')
@section('page-description','')

@section('content')
	<a href="{{route('staff_types.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of staff_type</h4>
@endsection
