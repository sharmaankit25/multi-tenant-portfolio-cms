@extends('layouts.app')

@section('page-header','Event Details')
@section('page-description','')

@section('content')
	<a href="{{route('events.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of Event</h4>
@endsection
