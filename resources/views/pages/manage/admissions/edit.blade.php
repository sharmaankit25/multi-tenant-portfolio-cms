@extends('layouts.app')

@section('page-header','Edit admission')
@section('page-description','')

@section('content')
	<h4>Edit admission Details</h4>
	<form action="{{route('admissions.update',['admission'=>$admission->id])}}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Full Name',
			'value'=>$admission->name
		])

		@include('form.text',[
			'name'=>'age',
			'type'=>'number',
			'placeholder'=>'Age',
			'value'=>$admission->age
		])

		@include('form.text',[
			'name'=>'birthdate',
			'type'=>'date',
			'placeholder'=>'Date of Birth',
			'value'=>$admission->birthdate
		])

		@include('form.text',[
			'name'=>'session',
			'type'=>'number',
			'min'=>date('Y'),
			'max'=>date('Y') + 1,
			'placeholder'=>'Year Applied For',
			'value'=>$admission->session
		])

		@include('form.select',[
			'name'=>'type',
			'options'=>['hosteler','day_scholer'],
			'placeholder'=>'Type Of Student',
			'data'=>$admission->type
		])

		@include('form.text',[
			'name'=>'admission_date',
			'type'=>'date',
			'placeholder'=>'Date of Admission',
			'value'=>$admission->admission_date
		])

		@include('form.text',[
			'name'=>'fathers_name',
			'placeholder'=>'Fathers Name',
			'value'=>$admission->fathers_name
		])

		@include('form.text',[
			'name'=>'mothers_name',
			'placeholder'=>'Mothers Name',
			'value'=>$admission->mothers_name
		])

		@include('form.text',[
			'name'=>'city',
			'placeholder'=>'City',
			'value'=>$admission->city
		])

		@include('form.text',[
			'name'=>'address',
			'placeholder'=>'Address',
			'value'=>$admission->address
		])

		@include('form.text',[
			'name'=>'phone',
			'placeholder'=>'Contact No.',
			'value'=>$admission->phone
		])

		@include('form.text',[
			'name'=>'email',
			'placeholder'=>'contact email',
			'value'=>$admission->email
		])

		@include('form.text',[
			'name'=>'previous_school',
			'placeholder'=>'Name of Previous School',
			'value'=>$admission->previous_school
		])

		@include('form.select',[
			'name'=>'standard_id',
			'options'=>[1,2,3],
			'placeholder'=>'Standard For Admission',
			'data'=>$admission->standard_id
		])

		@include('form.text',[
			'name'=>'note',
			'placeholder'=>'Note',
			'value'=>$admission->note
		])

		@include('form.text',[
			'name'=>'document_id',
			'placeholder'=>'Document',
			'value'=>1
		])
		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
