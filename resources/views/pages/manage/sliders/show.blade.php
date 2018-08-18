@extends('layouts.app')

@section('page-header','slider Details')
@section('page-description','')

@section('content')
	<a href="{{route('sliders.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of slider</h4>
@endsection
