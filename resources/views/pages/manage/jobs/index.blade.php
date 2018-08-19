@extends('layouts.app')

@section('page-header','jobs')
@section('page-description','')

@section('content')
  @can('create',App\Job::class)
	<a href="{{route('jobs.create')}}" class="btn btn-success">Create New</a>
  @endcan
	<h4>List of jobs</h4>
	  <div class="box">
      <div class="box-header">
        <h3 class="box-title">jobs</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="datatable table table-bordered table-striped">
          {{-- head of table --}}
          <thead>
          <tr>
              <th>Title</th>
              <th>Post</th>
              <th>Qualification</th>
              <th>Vacancy</th>
              <th>Vacant</th>
              <th>Salary</th>
              <th>Code</th>
              <th>Published At</th>
              <th>Actions</th>
          </tr>
          </thead>
          {{-- Body Of table --}}
          <tbody>
            @foreach($jobs as $job)
            <tr>
            	<td>{{ $job->title }}</td>
            	<td>{{ $job->post}}</td>
            	<td>{{ $job->qualification }}</td>
            	<td>{{ $job->vacancy }}</td>
            	<td>{{ $job->vacant }}</td>
            	<td>{{ $job->salary }}</td>
            	<td>{{ $job->code }}</td>
            	<td>{{ $job->published_at }}</td>
            	<td>
                @can('view',$job)
            		<a class="btn btn-info" href="{{route('jobs.show',['job'=>$job->id])}}"><i class="fa fa-eye"></i></a>
                @endcan
                @can('update',$job)
            		<a class="btn btn-success" href="{{route('jobs.edit',['job'=>$job->id])}}"><i class="fa fa-edit"></i></a>
                @endcan
                @can('delete',$job)
            		<a class="btn btn-danger" href="{{route('jobs.destroy',['job'=>$job->id])}}"><i class="fa fa-trash"></i></a>
                @endcan
            	</td>
            </tr>
            @endforeach
          </tbody>

          {{-- Footer of Table  --}}
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Post</th>
              <th>Qualification</th>
              <th>Vacancy</th>
              <th>Vacant</th>
              <th>Salary</th>
              <th>Code</th>
              <th>Published At</th>
              <th>Actions</th>
            </tr>
            </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
  </div>
  <!-- /.box -->

@endsection
