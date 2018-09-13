@extends('layouts.app')

@section('page-header','notice Details')
@section('page-description','')

@section('content')
	<a href="{{route('notices.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of notice</h4>
		<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of notice</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$notice->title}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Type</div>
       			<div class="col-sm-9">{{$notice->type}}</div>
       		</div>
			   <div class="row">
       			<div class="col-sm-3">Published At</div>
       			<div class="col-sm-9">{{$notice->published_at}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Age</div>
       			<div class="col-sm-9">{{$notice->description }}</div>
    </div>
	</div>
@endsection
