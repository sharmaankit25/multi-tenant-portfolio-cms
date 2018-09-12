@extends('layouts.app')

@section('page-header','Event Details')
@section('page-description','')

@section('content')
	<a href="{{route('events.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of Event</h4>
	<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of event</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$event->name}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Start Date</div>
       			<div class="col-sm-9">{{$event->start_date}}</div>
       		</div>
			   <div class="row">
       			<div class="col-sm-3">End Date</div>
       			<div class="col-sm-9">{{$event->end_date}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Description</div>
       			<div class="col-sm-9">{{$event->description }}</div>
    		</div>
</div>
@endsection
