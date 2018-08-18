@extends('layouts.app')

@section('page-header','photo Details')
@section('page-description','')

@section('content')
	<a href="{{route('photos.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of photo</h4>
@endsection
