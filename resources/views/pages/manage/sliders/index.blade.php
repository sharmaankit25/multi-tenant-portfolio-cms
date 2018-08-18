@extends('layouts.app')

@section('page-header','sliders')
@section('page-description','')

@section('content')
	<a href="{{route('sliders.create')}}" class="btn btn-success">Create New</a>
	<h4>List of sliders</h4>
@endsection
