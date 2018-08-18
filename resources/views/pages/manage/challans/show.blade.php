@extends('layouts.app')

@section('page-header','challan Details')
@section('page-description','')

@section('content')
	<a href="{{route('challans.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of challan</h4>
@endsection
