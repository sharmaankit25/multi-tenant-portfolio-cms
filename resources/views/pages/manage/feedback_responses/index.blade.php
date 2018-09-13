@extends('layouts.app')

@section('page-header','Feedback Responses')
@section('page-description','')

@section('content')
	<a href="{{route('feedback_responses.create')}}" class="btn btn-success">Create New</a>
	<h4>List of Responses</h4>
@endsection
