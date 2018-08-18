@extends('layouts.app')

@section('page-header','album Details')
@section('page-description','')

@section('content')
	<a href="{{route('albums.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of album</h4>
@endsection
