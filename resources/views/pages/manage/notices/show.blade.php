@extends('layouts.app')

@section('page-header','notice Details')
@section('page-description','')

@section('content')
	<a href="{{route('notices.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of notice</h4>
@endsection
