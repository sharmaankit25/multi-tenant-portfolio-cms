@extends('layouts.app')

@section('page-header','photos')
@section('page-description','')

@section('content')
	<a href="{{route('photos.create')}}" class="btn btn-success">Create New</a>
	<h4>List of photos</h4>
@endsection
