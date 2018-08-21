@extends('layouts.app')

@section('page-header','admissions')
@section('page-description','')

@section('content')
	<a href="{{route('admissions.create')}}" class="btn btn-success">Create New</a>
	<h4>List of admissions</h4>
		  <div class="box">
      <div class="box-header">
        <h3 class="box-title">admissions</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Name</th>
              <th>Date of Birth</th>
              <th>Session</th>
              <th>Type</th>
              <th>Admission Date</th>
              <th>Code</th>
              <th>fathers_name</th>
			  <th>Standard</th>
			  <th>Status</th>
              <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($admissions as $admission)
            <tr>
            	<td>{{ $admission->name }}</td>
            	<td>{{ $admission->birthdate }}</td>
            	<td>{{ $admission->session }}</td>
            	<td>{{ $admission->type }}</td>
            	<td>{{ $admission->admission_date }}</td>
            	<td>{{ $admission->code }}</td>
            	<td>{{ $admission->fathers_name }}</td>
				<td>{{ $admission->standard_id }}</td>
				<td>{{ $admission->status }}</td>
            	<td>
                @can('view',$admission)
            		<a class="btn btn-info" href="{{route('admissions.show',['admission'=>$admission->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$admission)
            		<a class="btn btn-success" href="{{route('admissions.edit',['admission'=>$admission->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$admission)
            		<a class="btn btn-danger" href="{{route('admissions.destroy',['admission'=>$admission->id])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Date of Birth</th>
              <th>Session</th>
              <th>Type</th>
              <th>Admission Date</th>
              <th>Code</th>
              <th>fathers_name</th>
			  <th>Standard</th>
			  <th>Status</th>
              <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
  </div>
  <!-- /.box -->
@endsection
