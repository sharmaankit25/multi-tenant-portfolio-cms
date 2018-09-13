@extends('layouts.app')

@section('page-header','feedback Details')
@section('page-description','')

@section('content')
	<a href="{{route('feedbacks.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of feedback</h4>
		<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of Album</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$feedback->question}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Age</div>
       			<div class="col-sm-9">{{$feedback->description }}</div>
    </div>
	</div>
@endsection
