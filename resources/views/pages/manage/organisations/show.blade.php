@extends('layouts.app')

@section('page-header','Organisation Details')
@section('page-description','')

@section('content')
	<a href="{{route('organisations.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of Organisation</h4>
		<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of organisation</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Name</div>
       			<div class="col-sm-9">{{$organisation->name}}</div>
       		</div>
       		<div class="row">
       			<div class="col-sm-3">Age</div>
       			<div class="col-sm-9">{{$organisation->description }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Address</div>
       			<div class="col-sm-9">{{ $organisation->address }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Phone</div>
       			<div class="col-sm-9">{{$organisation->phone }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Email</div>
       			<div class="col-sm-9">{{$organisation->email }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Token</div>
       			<div class="col-sm-9">{{$organisation->token }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">lat_long</div>
       			<div class="col-sm-9">{{$organisation->lat_long }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Url</div>
       			<div class="col-sm-9">{{$organisation->url }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Social Networks</div>
       			<div class="col-sm-9">{{$organisation->social_networks }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Theme</div>
       			<div class="col-sm-9">{{$organisation->theme }}</div>
    		</div>
			<div class="row">
       			<div class="col-sm-3">Renewal Date</div>
       			<div class="col-sm-9">{{$organisation->renwal_date }}</div>
    		</div>
	</div>
@endsection
