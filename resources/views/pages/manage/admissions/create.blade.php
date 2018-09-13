@extends('layouts.app')

@section('page-header','Create a new admission')
@section('page-description','')

@section('content')
	<h4>New admission</h4>
	<form action="{{route('admissions.store')}}" method="post">
		{{ csrf_field() }}
		@include('form.text',[
			'name'=>'name',
			'placeholder'=>'Full Name'
		])

		@include('form.text',[
			'name'=>'age',
			'type'=>'number',
			'placeholder'=>'Age'
		])

		@include('form.text',[
			'name'=>'birthdate',
			'type'=>'date',
			'placeholder'=>'Date of Birth'
		])

		@include('form.text',[
			'name'=>'session',
			'type'=>'number',
			'min'=>date('Y'),
			'max'=>date('Y') + 1,
			'placeholder'=>'Year Applied For'
		])

		@include('form.select',[
			'name'=>'type',
			'options'=>['hosteler','day_scholer'],
			'placeholder'=>'Type Of Student'
		])

		@include('form.text',[
			'name'=>'admission_date',
			'type'=>'date',
			'placeholder'=>'Date of Admission'
		])

		@include('form.text',[
			'name'=>'fathers_name',
			'placeholder'=>'Fathers Name'
		])

		@include('form.text',[
			'name'=>'mothers_name',
			'placeholder'=>'Mothers Name'
		])

		@include('form.text',[
			'name'=>'city',
			'placeholder'=>'City'
		])

		@include('form.text',[
			'name'=>'address',
			'placeholder'=>'Mothers Name'
		])

		@include('form.text',[
			'name'=>'phone',
			'placeholder'=>'Contact No.'
		])

		@include('form.text',[
			'name'=>'email',
			'placeholder'=>'contact email'
		])

		@include('form.text',[
			'name'=>'previous_school',
			'placeholder'=>'Name of Previous School'
		])

		@include('form.select',[
			'name'=>'standard_id',
			'options'=>[1,2,3],
			'placeholder'=>'Standard For Admission'
		])

		@include('form.text',[
			'name'=>'note',
			'placeholder'=>'Note'
		])

		@include('form.text',[
			'name'=>'document_id',
			'placeholder'=>'Document',
			'value'=>1
		])

		<button class="btn btn-default">Submit</button>
	</form>
	

@endsection
