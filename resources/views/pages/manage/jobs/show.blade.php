@extends('layouts.app')

@section('page-header','job Details')
@section('page-description','')

@section('content')
	@can('create',App\Job::class)
	<a href="{{route('jobs.create')}}" class="btn btn-success">Create New</a>
	@endcan
	<h4>Details of job</h4>
<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of job</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Code</div>
       			<div class="col-sm-9">{{$job->code}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Title</div>
       			<div class="col-sm-9">{{$job->title }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Description</div>
       			<div class="col-sm-9">{{$job->description}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Post</div>
       			<div class="col-sm-9">{{$job->post}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Qualification</div>
       			<div class="col-sm-9">{{$job->qualification}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Vacancy</div>
       			<div class="col-sm-9">{{$job->vacancy }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Vacant</div>
       			<div class="col-sm-9">{{ $job->vacant }}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Salary</div>
       			<div class="col-sm-9">{{ $job->salary }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Published At</div>
       			<div class="col-sm-9">{{$job->created_at}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Deleted At</div>
       			<div class="col-sm-9">{{$job->deleted_at}}</div>
       		</div>
    </div>
</div>
@endsection
