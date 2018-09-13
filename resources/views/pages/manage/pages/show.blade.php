@extends('layouts.app')

@section('page-header','page Details')
@section('page-description','')

@section('content')
	<a href="{{route('pages.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of page</h4>
	<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of Album</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Title</div>
       			<div class="col-sm-9">{{$page->title}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Age</div>
       			<div class="col-sm-9">{{$page->content }}</div>
    </div>
</div>
@endsection
