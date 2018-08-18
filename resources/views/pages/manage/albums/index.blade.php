@extends('layouts.app')

@section('page-header','albums')
@section('page-description','')

@section('content')
	<a href="{{route('albums.create')}}" class="btn btn-success">Create New</a>
	<h4>List of albums</h4>
@endsection
