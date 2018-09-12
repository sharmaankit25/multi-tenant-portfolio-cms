@extends('layouts.app')

@section('page-header','slider Details')
@section('page-description','')

@section('content')
	<a href="{{route('sliders.create')}}" class="btn btn-success">Create New</a>
	<h4>Details of slider</h4>
		<div class="box">
	<div class="box-header">
        <h3 class="box-title">Details Of Slider</h3>
      </div>
      <!-- /.box-header -->
      	<div class="box-body">
       		<div class="row">
       			<div class="col-sm-3">Title</div>
       			<div class="col-sm-9">{{$slider->title}}</div>
       		</div>
			<h3>Photos</h3>
			@foreach($slider->photos as $photo)
			<div class="row">
       			<div class="col-sm-3">Photo description</div>
       			<div class="col-sm-9">{{$photo->description}}</div>
       		</div>
			<div class="row">
       			<div class="col-sm-3">Photo</div>
       			<div class="col-sm-9"><img src="{{ Storage::url($photo->photo) }}" alt=""></div>
       		</div>
			@endforeach
		</div>
@endsection
