@extends('layouts.app')

@section('page-header','Events')
@section('page-description','')

@section('content')
	<a href="{{route('events.create')}}" class="btn btn-success">Create New</a>
	<h4>List of Events</h4>
@endsection
