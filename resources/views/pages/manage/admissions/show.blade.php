@extends('layouts.app')

@section('page-header','admission Details')
@section('page-description','')

@section('content')
	<a href="{{route('admissions.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of admission</h4>
	<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of admission</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$admission->name}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Age</div>
       			<div class="col-sm-9">{{$admission->age }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Birthdate</div>
       			<div class="col-sm-9">{{$admission->birthdate}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Session</div>
       			<div class="col-sm-9">{{$admission->session}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Type</div>
       			<div class="col-sm-9">{{$admission->type}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Admission Date</div>
       			<div class="col-sm-9">{{$admission->admission_date }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Fathers Name</div>
       			<div class="col-sm-9">{{ $admission->fathers_name }}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Mothers Name</div>
       			<div class="col-sm-9">{{ $admission->mothers_name }}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">City</div>
       			<div class="col-sm-9">{{$admission->city}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Address</div>
       			<div class="col-sm-9">{{$admission->address}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Phone</div>
       			<div class="col-sm-9">{{$admission->phone}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Email</div>
       			<div class="col-sm-9">{{$admission->email}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Previous School</div>
       			<div class="col-sm-9">{{$admission->previous_school}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Standard</div>
       			<div class="col-sm-9">{{$admission->standard->name}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Code</div>
       			<div class="col-sm-9">{{$admission->code}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Status</div>
       			<div class="col-sm-9">{{$admission->status}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Note</div>
       			<div class="col-sm-9">{{$admission->note}}</div>
       		</div>
    </div>
</div>
@endsection
