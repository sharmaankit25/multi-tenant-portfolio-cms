@extends('layouts.app')

@section('page-header','staff Details')
@section('page-description','')

@section('content')
	<a href="{{route('staffs.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of staff</h4>
@endsection
