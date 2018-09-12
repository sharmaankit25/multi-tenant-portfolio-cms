@extends('layouts.app')

@section('page-header','achiever Details')
@section('page-description','')

@section('content')
	<a href="{{route('achievers.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of achiever</h4>
		<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of achiever</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$achiever->name}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Position</div>
       			<div class="col-sm-9">{{$achiever->position}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Standard</div>
       			<div class="col-sm-9">{{$achiever->standard->name}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Event</div>
       			<div class="col-sm-9">{{$achiever->event->name}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Description</div>
       			<div class="col-sm-9">{{$achiever->description }}</div>
    </div>
	</div>
@endsection
